<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // dream_market_admin_homepage
        if ($pathinfo === '/admin/post') {
            return array (  '_controller' => 'DreamMarket\\AdminBundle\\Controller\\PostController::indexAction',  '_route' => 'dream_market_admin_homepage',);
        }

        if (0 === strpos($pathinfo, '/blog')) {
            // blog_index
            if (rtrim($pathinfo, '/') === '/blog') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'blog_index');
                }

                return array (  '_controller' => 'DreamMarket\\ClientBundle\\Controller\\DefaultController::indexAction',  '_route' => 'blog_index',);
            }

            // blog_new
            if ($pathinfo === '/blog/new') {
                return array (  '_controller' => 'DreamMarket\\ClientBundle\\Controller\\DefaultController::newAction',  '_route' => 'blog_new',);
            }

            // blog_show
            if (preg_match('#^/blog/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_show')), array (  '_controller' => 'DreamMarket\\ClientBundle\\Controller\\DefaultController::showAction',));
            }

            // blog_delete
            if (preg_match('#^/blog/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_delete')), array (  '_controller' => 'DreamMarket\\ClientBundle\\Controller\\DefaultController::deleteAction',));
            }

            // blog_edit
            if (preg_match('#^/blog/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_edit')), array (  '_controller' => 'DreamMarket\\ClientBundle\\Controller\\DefaultController::editAction',));
            }

            // blog_search
            if ($pathinfo === '/blog/search') {
                return array (  '_controller' => 'DreamMarket\\ClientBundle\\Controller\\DefaultController::searchAction',  '_route' => 'blog_search',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
