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

        // twc_enfants_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/enfants/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'twc_enfants_homepage']), array (  '_controller' => 'TWC\\EnfantsBundle\\Controller\\DefaultController::indexAction',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_twc_enfants_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'twc_enfants_homepage'));
            }

            return $ret;
        }
        not_twc_enfants_homepage:

        // index_presentation
        if (preg_match('#^/(?P<_locale>[^/]++)/enfants/indexP$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'index_presentation']), array (  '_controller' => 'TWC\\EnfantsBundle\\Controller\\PresentationController::indexAction',));
        }

        // index_droits
        if (preg_match('#^/(?P<_locale>[^/]++)/enfants/indexD$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'index_droits']), array (  '_controller' => 'TWC\\EnfantsBundle\\Controller\\DroitsController::indexAction',));
        }

        // index_jeux
        if (preg_match('#^/(?P<_locale>[^/]++)/enfants/indexJ$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'index_jeux']), array (  '_controller' => 'TWC\\EnfantsBundle\\Controller\\JeuxController::indexAction',));
        }

        // index_coloriage
        if (preg_match('#^/(?P<_locale>[^/]++)/enfants/indexC$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'index_coloriage']), array (  '_controller' => 'TWC\\EnfantsBundle\\Controller\\ColoriageController::indexAction',));
        }

        // index_bd
        if (preg_match('#^/(?P<_locale>[^/]++)/enfants/indexB$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'index_bd']), array (  '_controller' => 'TWC\\EnfantsBundle\\Controller\\BDController::indexAction',));
        }

        // index_videophoto
        if (preg_match('#^/(?P<_locale>[^/]++)/enfants/indexV$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'index_videophoto']), array (  '_controller' => 'TWC\\EnfantsBundle\\Controller\\VideosPhotosController::indexAction',));
        }

        // brochure
        if (preg_match('#^/(?P<_locale>[^/]++)/enfants/brochure$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'brochure']), array (  '_controller' => 'TWC\\EnfantsBundle\\Controller\\TelechargementController::brochureAction',));
        }

        // convention
        if (preg_match('#^/(?P<_locale>[^/]++)/enfants/convention$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'convention']), array (  '_controller' => 'TWC\\EnfantsBundle\\Controller\\TelechargementController::conventionAction',));
        }

        // twc_parlement_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'twc_parlement_homepage']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\DefaultController::indexAction',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_twc_parlement_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'twc_parlement_homepage'));
            }

            return $ret;
        }
        not_twc_parlement_homepage:

        // parlement_presentation
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/presentation$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_presentation']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\ParlementController::presentationAction',));
        }

        // parlement_role
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/role$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_role']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\ParlementController::roleAction',));
        }

        // parlement_composition
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/composition$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_composition']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\ParlementController::compositionAction',));
        }

        // parlement_commissions
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/commissions$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_commissions']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\ParlementController::commissionsAction',));
        }

        // parlement_regional_presentation
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/presentationR$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_regional_presentation']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\SessionsController::presentationRAction',));
        }

        // parlement_regional_activites
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/activitesR$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_regional_activites']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\SessionsController::activitesRAction',));
        }

        // parlement_regional_session
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/sessionR$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_regional_session']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\SessionsController::sessionRAction',));
        }

        // parlement_national_presentation
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/presentationN$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_national_presentation']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\SessionsController::presentationNAction',));
        }

        // parlement_national_activites
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/activitesN$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_national_activites']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\SessionsController::activitesNAction',));
        }

        // parlement_national_session
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/sessionN$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_national_session']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\SessionsController::sessionNAction',));
        }

        // parlement_agenda_presentation
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/presentation$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_agenda_presentation']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\AgendaController::presentationAction',));
        }

        // parlement_agenda_priorites
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/priorites$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_agenda_priorites']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\AgendaController::prioritesAction',));
        }

        // parlement_agenda_ep
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/agenda$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_agenda_ep']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\AgendaController::agendaAction',));
        }

        // parlement_activites_presentation
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/presentationA$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_activites_presentation']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\ActivitesController::presentationAction',));
        }

        // parlement_activites_membres
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/membres$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_activites_membres']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\ActivitesController::membresAction',));
        }

        // parlement_activites_carte
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/carte$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_activites_carte']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\ActivitesController::carteAction',));
        }

        // parlement_cape_presentation
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/presentationC$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_cape_presentation']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\CapeController::presentationAction',));
        }

        // parlement_cape_reseau
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/reseau$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_cape_reseau']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\CapeController::reseauAction',));
        }

        // parlement_mediatheque_index
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/indexM$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_mediatheque_index']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\MediathequeController::indexAction',));
        }

        // parlement_documentation_index
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/indexDoc$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_documentation_index']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\DocumentationController::indexAction',));
        }

        // parlement_contact_telfax
        if (preg_match('#^/(?P<_locale>[^/]++)/parlement/telfax$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'parlement_contact_telfax']), array (  '_controller' => 'TWC\\ParlementBundle\\Controller\\ContactController::telfaxAction',));
        }

        // twc_congres_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/congres/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'twc_congres_homepage']), array (  '_controller' => 'TWC\\CongresBundle\\Controller\\DefaultController::indexAction',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_twc_congres_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'twc_congres_homepage'));
            }

            return $ret;
        }
        not_twc_congres_homepage:

        // message
        if (preg_match('#^/(?P<_locale>[^/]++)/congres/message$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'message']), array (  '_controller' => 'TWC\\CongresBundle\\Controller\\PresentationController::messageAction',));
        }

        // royale
        if (preg_match('#^/(?P<_locale>[^/]++)/congres/royale$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'royale']), array (  '_controller' => 'TWC\\CongresBundle\\Controller\\PresentationController::royaleAction',));
        }

        // congres
        if (preg_match('#^/(?P<_locale>[^/]++)/congres/congres$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'congres']), array (  '_controller' => 'TWC\\CongresBundle\\Controller\\PresentationController::congresAction',));
        }

        // liste
        if (preg_match('#^/(?P<_locale>[^/]++)/congres/liste$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'liste']), array (  '_controller' => 'TWC\\CongresBundle\\Controller\\EditionsController::listeAction',));
        }

        // twc_ville_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/ville/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'twc_ville_homepage']), array (  '_controller' => 'TWC\\VilleBundle\\Controller\\DefaultController::indexAction',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_twc_ville_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'twc_ville_homepage'));
            }

            return $ret;
        }
        not_twc_ville_homepage:

        // discours
        if (preg_match('#^/(?P<_locale>[^/]++)/ville/discours$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'discours']), array (  '_controller' => 'TWC\\VilleBundle\\Controller\\PresentationController::discoursAction',));
        }

        // phenomene
        if (preg_match('#^/(?P<_locale>[^/]++)/ville/phenomene$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'phenomene']), array (  '_controller' => 'TWC\\VilleBundle\\Controller\\PresentationController::phenomeneAction',));
        }

        // role
        if (preg_match('#^/(?P<_locale>[^/]++)/ville/role$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'role']), array (  '_controller' => 'TWC\\VilleBundle\\Controller\\PresentationController::roleAction',));
        }

        // objectifs
        if (preg_match('#^/(?P<_locale>[^/]++)/ville/objectifs$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'objectifs']), array (  '_controller' => 'TWC\\VilleBundle\\Controller\\MissionsController::objectifsAction',));
        }

        // unicef
        if (preg_match('#^/(?P<_locale>[^/]++)/ville/unicef$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'unicef']), array (  '_controller' => 'TWC\\VilleBundle\\Controller\\PartenairesController::unicefAction',));
        }

        // gouvernement
        if (preg_match('#^/(?P<_locale>[^/]++)/ville/gouvernement$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'gouvernement']), array (  '_controller' => 'TWC\\VilleBundle\\Controller\\PartenairesController::gouvernementAction',));
        }

        // cglu
        if (preg_match('#^/(?P<_locale>[^/]++)/ville/cglu$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'cglu']), array (  '_controller' => 'TWC\\VilleBundle\\Controller\\PartenairesController::cgluAction',));
        }

        // adherentes
        if (preg_match('#^/(?P<_locale>[^/]++)/ville/adherentes$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'adherentes']), array (  '_controller' => 'TWC\\VilleBundle\\Controller\\PartenairesController::adherentesAction',));
        }

        // twc_onde_homepage
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'twc_onde_homepage']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\DefaultController::indexAction',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_twc_onde_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'twc_onde_homepage'));
            }

            return $ret;
        }
        not_twc_onde_homepage:

        // twc_onde_index
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'twc_onde_index']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\DefaultController::indexAction',));
        }

        // twc_onde_etudes
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/Etudes et Rapports$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'twc_onde_etudes']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\DefaultController::etudesAction',));
        }

        // twc_onde_photos_videos
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/Photos_et_Vidéothèques$#sDu', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'twc_onde_photos_videos']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\DefaultController::photosAction',));
        }

        // presentation
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/presentation$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'presentation']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\OndeController::presentationAction',));
        }

        // missions
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/missions$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'missions']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\OndeController::missionsAction',));
        }

        // realisations
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/realisations$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'realisations']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\OndeController::realisationsAction',));
        }

        // plaidoyer
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/plaidoyer$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'plaidoyer']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\OndeController::plaidoyerAction',));
        }

        // publications
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/publications$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'publications']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\OndeController::publicationsAction',));
        }

        // historique
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/historique$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'historique']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\OndeController::historiqueAction',));
        }

        // historique_2
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/historique/ar$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'historique_2']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\OndeController::historiqueArAction',));
        }

        // organigramme
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/organigramme$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'organigramme']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\OndeController::organigrammeAction',));
        }

        // protection
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/protection$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'protection']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ActionsController::protectionAction',));
        }

        // participation
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/participation$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'participation']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ActionsController::participationAction',));
        }

        // sante
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/sante$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'sante']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ActionsController::santeAction',));
        }

        // observatoire
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/observatoire$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'observatoire']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ActionsController::observatoireAction',));
        }

        // cnde
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/cnde$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'cnde']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ActionsController::cndeAction',));
        }

        // campagne
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/campagne$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'campagne']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ActionsController::campagneAction',));
        }

        // index_actualite
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/actualités$#sDu', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'index_actualite']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ActualitesController::indexAction',));
        }

        // index_details
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/details/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'index_details']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ActualitesController::detailsAction',));
        }

        // documentation
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/documentation$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'documentation']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\espacePressController::documentationAction',));
        }

        // contacts
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/contacts$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'contacts']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\espacePressController::contactsAction',));
        }

        // index
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/index$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'index']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\PortailEnfantController::indexAction',));
        }

        // formulaire
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/formulaire$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'formulaire']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ContactController::formulaireAction',));
        }

        // telfax
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/telfax$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'telfax']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ContactController::telfaxAction',));
        }

        // index_detailsPress
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/presse/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'index_detailsPress']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\espacePressController::presseDetailsAction',));
        }

        // onde_connection
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/connection$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_connection']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\AdminController::connectionAction',));
        }

        // onde_ForgotPw
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/onde/recover$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_ForgotPw']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\AdminController::ForgotPWAction',));
        }

        // onde_recoverForgottenPw
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/recoverForgottenPassword/(?P<email>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_recoverForgottenPw']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\AdminController::recoverForgottenPasswordAction',));
        }

        // admin_login
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/login$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_login']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\AdminController::loginAction',));
        }

        // admin_logout
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/logout$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_logout']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\AdminController::logoutAction',));
        }

        // onde_add_picture
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/addPicture$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_add_picture']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ArticleMediaController::addPictureAction',));
        }

        // onde_add_img_picture
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/imagePicture(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_add_img_picture']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ArticleMediaController::addimagePictureAction',  'id' => NULL,));
        }

        // onde_list_picture
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/listPictures$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_list_picture']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ArticleMediaController::listPictureAction',));
        }

        // onde_delete_Image
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/deletePicture(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_delete_Image']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ArticleMediaController::deletePictureAction',  'id' => NULL,));
        }

        // onde_add_media
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/addMedia(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_add_media']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ArticleMediaController::addMediaAction',  'id' => NULL,));
        }

        // onde_list_media
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/listMedias$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_list_media']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ArticleMediaController::listMediaAction',));
        }

        // onde_delete_Media
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/deleteMedia(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_delete_Media']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ArticleMediaController::deleteMediaAction',  'id' => NULL,));
        }

        // onde_add_img_media
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/imageMedia(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_add_img_media']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ArticleMediaController::addimageMediaAction',  'id' => NULL,));
        }

        // onde_delete_img_media
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/deleteImgMedia(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_delete_img_media']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ArticleMediaController::deleteImgMediaAction',  'id' => NULL,));
        }

        // onde_add_doc_media
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/docMedia(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_add_doc_media']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ArticleMediaController::addDocMediaAction',  'id' => NULL,));
        }

        // onde_delete_doc_media
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/deleteDocMedia(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_delete_doc_media']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ArticleMediaController::deleteDocMediaAction',  'id' => NULL,));
        }

        // onde_list_article
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/listArticles$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_list_article']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ArticleMediaController::listArticleAction',));
        }

        // onde_add_article
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/addArticle(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_add_article']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ArticleMediaController::addArticleAction',  'id' => NULL,));
        }

        // onde_delete_article
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/deleteArticle(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_delete_article']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ArticleMediaController::deleteArticleAction',  'id' => NULL,));
        }

        // onde_add_img_article
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/imageArticle(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_add_img_article']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ArticleMediaController::addimageArticleAction',  'id' => NULL,));
        }

        // onde_delete_img_article
        if (preg_match('#^/(?P<_locale>|en|fr|de|it|ar)/deleteImgArticle(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'onde_delete_img_article']), array (  '_controller' => 'TWC\\OndeBundle\\Controller\\ArticleMediaController::deleteImgArticleAction',  'id' => NULL,));
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
