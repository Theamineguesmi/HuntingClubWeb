<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/commentaire')) {
            // commentaire_index
            if ('/commentaire' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'BlogBundle\\Controller\\CommentaireController::indexAction',  '_route' => 'commentaire_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_commentaire_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'commentaire_index'));
                }

                return $ret;
            }
            not_commentaire_index:

            // commentaire_new
            if ('/commentaire/new' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\CommentaireController::newAction',  '_route' => 'commentaire_new',);
            }

            // commentaire_show
            if (preg_match('#^/commentaire/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'commentaire_show']), array (  '_controller' => 'BlogBundle\\Controller\\CommentaireController::showAction',));
            }

            // commentaire_edit
            if (preg_match('#^/commentaire/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'commentaire_edit']), array (  '_controller' => 'BlogBundle\\Controller\\CommentaireController::editAction',));
            }

            // commentaire_delete
            if (preg_match('#^/commentaire/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'commentaire_delete']), array (  '_controller' => 'BlogBundle\\Controller\\CommentaireController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/article')) {
            // article_index
            if ('/article' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_article_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'article_index'));
                }

                return $ret;
            }
            not_article_index:

            // article_new
            if ('/article/new' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::newAction',  '_route' => 'article_new',);
            }

            // article_show
            if (preg_match('#^/article/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'article_show']), array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::showAction',));
            }

            // article_edit
            if (preg_match('#^/article/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'article_edit']), array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::editAction',));
            }

            // article_delete
            if (preg_match('#^/article/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'article_delete']), array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::deleteAction',));
            }

        }

        // blog_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'blog_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_blog_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'blog_homepage'));
            }

            return $ret;
        }
        not_blog_homepage:

        // article_default_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ArticleBundle\\Controller\\DefaultController::indexAction',  '_route' => 'article_default_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_article_default_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'article_default_index'));
            }

            return $ret;
        }
        not_article_default_index:

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
