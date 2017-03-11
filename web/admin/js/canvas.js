/**
 * canvas画像オブジェクト
 *
 * 画像をキャンパスへ描画する基本的な流れ
 * <ul>
 *     <li>img要素を作成(ノードには追加しない)
 *     <li>img要素に画像を読込
 *     <li>img要素をcanvasへ描画
 * </ul>
 *
 * @author Hiroshi Sawai <info@info-town.jp>
 */
jQuery(function($) {

    var inputImg;
    var inputCanvas = $('<canvas>').appendTo($('#input-view')).get(0);
    var outputCanvas = $('<canvas>').appendTo($('#output-view')).get(0);
    var inputCxt;
    var outputCxt;

    // エラー表示
    function alert(text) {
        window.alert(text);
    }

    // img要素が存在すればtrue。存在しなければアラートを表示しfalseを返す。
    function checkImage () {
        if (($(inputImg).length  > 0) === false ) {
            alert('画像がありません。');
            return false;
        }
        return true;
    }

    // 読込画像タイプの確認
    // 適切な画像タイプならばtrue。対応していないタイプならばアラートを表示してfalseを返す
    function checkFileType(text) {
        // ファイルタイプの確認
        if (text.match(/^image\/(png|jpeg|gif)$/) === null) {
            alert('対応していないファイル形式です。\nファイルはPNG, JPEG, GIFに対応しています。');
            return false;
        }
        return true;
    }

    /*
     * 画像表示処理
     */
    // 画像読込ハンドラ
    function read(reader) {
        return function() {
            // imgへオブジェクトを読み込む
            inputImg = $('<img>').get(0);
            inputImg.onload = function() {
                try {
                    inputCanvas.width = inputImg.width;
                    inputCanvas.height = inputImg.height;
                    inputCxt.clearRect(0, 0, inputCanvas.width, inputCanvas.height);
                    inputCxt.drawImage(inputImg, 0, 0, inputImg.width, inputImg.height);
                } catch (e) {
                    alert('画像を開けませんでした。');
                }
            };
            inputImg.setAttribute('src', reader.result);
        };
    }

    // 参照ボタンを使う読込処理
    $('.upload').change (function() {
        var file, reader;

        // 選択したファイル情報
        file = this.files[0];

        // ファイルタイプの確認
        if (checkFileType(file.type) === false) {
            return false;
        }

        // inputCxt作成
        inputCxt = inputCanvas.getContext('2d');

        // canvasに描画
        reader = new FileReader();
        reader.onload = read(reader);
        reader.readAsDataURL(file);

    });

    /*
     * ドラッグアンドドロップの読込処理
     */
    $('#input-view').get(0).ondragover = function() {
        return false;
    };

    // bind('ondrop', function() {});はうまく動かなかった(2012.11.07)
    $('#input-view').get(0).ondrop = function(event) {

        var file, reader;

        if (event.dataTransfer.files.length === 0) {
            alert('画像を開けませんでした。');
            return false;
        }

        // ドロップされたファイル情報
        file = event.dataTransfer.files[0];

        // ファイルタイプの確認
        if (checkFileType(file.type) === false) {
            return false;
        }

        // inputCxt作成
        inputCxt = inputCanvas.getContext('2d');


        // canvasへの描画
        reader = new FileReader();
        reader.onload = read(reader);
        reader.readAsDataURL(file);

        // バブリング・デフォルト処理停止
        return false;

    };

    /*
     * 転送
     */
    $('#forward').click(function() {
        var data = inputCxt.getImageData(0, 0, inputImg.width, inputImg.height);
        outputCanvas.width = data.width;
        outputCanvas.height = data.height;
        outputCxt = outputCanvas.getContext('2d');
        outputCxt.putImageData(data, 0, 0);
    });

});
