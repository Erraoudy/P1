<?php

namespace TWC\OndeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use TWC\OndeBundle\Entity\OndeUser;
use TWC\OndeBundle\Entity\OndeArticle;
use TWC\OndeBundle\Entity\OndeImage;
use TWC\OndeBundle\Entity\OndePicture;
use TWC\OndeBundle\Entity\OndeMedia;


class ArticleMediaController extends Controller
{
  public function listPictureAction(Request $req){
    $user = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeUser')->findOneById($this->get('session')->get("user_id"));

    if(!$user){
        return $this->redirectToRoute('twc_onde_homepage');
    }
    $pictures = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndePicture')->findAll();

    return $this->render('TWCOndeBundle:Pictures:listing.html.twig',array('pictures'=>$pictures));
  }
  public function addPictureAction(Request $req) {
    $user = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeUser')->findOneById($this->get('session')->get("user_id"));

    if(!$user){
        return $this->redirectToRoute('twc_onde_homepage');
    }
    return $this->render('TWCOndeBundle:Pictures:newImage.html.twig');   
  }
  public function addImagePictureAction(Request $req, $id){

    $em = $this->getDoctrine()->getManager();
    if ($id != null) {
      $image = $em->getRepository('TWCOndeBundle:OndeImage')->findOneById($id);
      if ($image == null) {
        $image = new OndePicture();
        $em->persist($image);
        $em->flush();
      }
    }else{
      $image = new OndePicture();
      $em->persist($image);
      $em->flush();
    }
    
    if($req->isXmlHttpRequest()){

      if($req->files->get('file')) {
          $files = $req->files->get('file');
          
          $allowedMimeType = array('image/jpeg', 'image/png', 'image/gif', 'image/tiff');
          
          foreach ($files as $key => $file) {
              
              $fileName = $image->getId()."_picture"."_".rand().".".$file->guessExtension();
              $mimetype = $file->getMimeType();
              $extension = $file->guessExtension();
              $filesize = $file->getSize();
              $fileerror = $file->getError();

              if (in_array($mimetype, $allowedMimeType) && $filesize < 15000000 && $fileerror == 0) {

                  $path = 'assets/upload/Picture/';
                  $objectkey = $path.$fileName;
                  $target_dir = $this->get('kernel')->getRootDir() . '/../web/assets/upload/Picture/';
                  $src = $this->get('kernel')->getRootDir() . '/../web/assets/upload/Picture/'.$fileName;
                  $file->move($target_dir , $fileName);
                  
                  $image->setFileName($fileName);
                  $image->setObjectKey($objectkey);
                  $em->persist($image);
                  $em->flush();
              }
          }
          $em->persist($image);
          $em->flush();
          return new JsonResponse(array('path'=>$objectkey, 'state' => $this->get( 'translator' )->trans( "notifications.insertion_controller.add_photo.state"),'message' => $this->get( 'translator' )->trans( "notifications.insertion_controller.add_photo.message")));
      } 
    }
  }
  public function deletePictureAction(Request $req, $id){

    if ($id == null)
      return new JsonResponse('error');

    if($req->isXmlHttpRequest()){
      $picture = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndePicture')->findOneById($id);
      if ($picture->getObjectkey() != null) {
        if(file_exists($picture->getObjectkey())){
            unlink($picture->getObjectkey());
        }
      }
      $this->getDoctrine()->getManager()->remove($picture);
      $this->getDoctrine()->getManager()->flush();
      return new JsonResponse(array('state' => $this->get( 'translator' )->trans( "notifications.insertion_controller.add_photo.state"),'message' => $this->get( 'translator' )->trans( "notifications.insertion_controller.add_photo.message")));

    }
  }


  public function listMediaAction(Request $req){
    $user = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeUser')->findOneById($this->get('session')->get("user_id"));

    if(!$user){
        return $this->redirectToRoute('twc_onde_homepage');
    }
    $medias = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeMedia')->findAll();
    return $this->render('TWCOndeBundle:Media:listing.html.twig',array('medias'=>$medias));
  }

  public function deleteMediaAction(Request $req, $id){

    if ($id == null)
      return new JsonResponse('error');

    if($req->isXmlHttpRequest()){

      $media = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeMedia')->findOneById($id);
      if ($media->getImage() != null) {
        if(file_exists($media->getImage())){
            unlink($media->getImage());
        }
      }
      $this->getDoctrine()->getManager()->remove($media);
      $this->getDoctrine()->getManager()->flush();

      return new JsonResponse(array('state' => $this->get( 'translator' )->trans( "notifications.insertion_controller.add_photo.state"),'message' => $this->get( 'translator' )->trans( "notifications.insertion_controller.add_photo.message")));
    }
  }

  public function addMediaAction(Request $req, $id) {
    $user = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeUser')->findOneById($this->get('session')->get("user_id"));

    if(!$user){
        return $this->redirectToRoute('twc_onde_homepage');
    }
    if ($id == null) {
      $media = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeMedia')->findOneBy(array('status'=>'draft'));
      if ($media == null) {
          $media = new OndeMedia();
          $media->setCreationDate(new \DateTime('now'));
          $this->getDoctrine()->getManager()->persist($media);
          $this->getDoctrine()->getManager()->flush();
      }
    }else{
      $media = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeMedia')->findOneBy(array('id'=>$id));
    }
    $pictures = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndePicture')->findAll();

    if($req->isMethod('POST')) {
      if(isset($_POST['title'])){ $media->setTitle($_POST['title']); }
      if(isset($_POST['mediaEditor'])){ $media->setContenu($_POST['mediaEditor']); }
      $media->setStatus('complete');

      $this->getDoctrine()->getManager()->persist($media);
      $this->getDoctrine()->getManager()->flush();
      return $this->redirectToRoute('onde_list_media');
    }

    return $this->render('TWCOndeBundle:Media:addMedia.html.twig', array('media'=>$media, 'pictures'=>$pictures));   
  }

  public function addImageMediaAction(Request $req, $id){

    $em = $this->getDoctrine()->getManager();
    if ($id != null) {
      $media = $em->getRepository('TWCOndeBundle:OndeMedia')->findOneById($id);
      if ($media == null) {
        return new JsonResponse("oho2");
      }
    }
    
    if($req->isXmlHttpRequest()){

      if($req->files->get('file')) {
          $files = $req->files->get('file');
          
          $allowedMimeType = array('image/jpeg', 'image/png', 'image/gif', 'image/tiff');
          
          foreach ($files as $key => $file) {
              
              $fileName = $media->getId()."_media"."_".rand().".".$file->guessExtension();
              $mimetype = $file->getMimeType();
              $extension = $file->guessExtension();
              $filesize = $file->getSize();
              $fileerror = $file->getError();

              if (in_array($mimetype, $allowedMimeType) && $filesize < 15000000 && $fileerror == 0) {

                  $path = 'assets/upload/Media/';
                  $objectkey = $path.$fileName;
                  $target_dir = $this->get('kernel')->getRootDir() . '/../web/assets/upload/Media/';
                  $src = $this->get('kernel')->getRootDir() . '/../web/assets/upload/Media/'.$fileName;
                  $file->move($target_dir , $fileName);
                  
                  $media->setImage($objectkey);
                  $em->persist($media);
                  $em->flush();
              }
          }
          $em->persist($media);
          $em->flush();
          return new JsonResponse(array('state' => $this->get( 'translator' )->trans( "notifications.insertion_controller.add_photo.state"),'message' => $this->get( 'translator' )->trans( "notifications.insertion_controller.add_photo.message")));
      } 
    }
  }

  public function deleteImgMediaAction(Request $req, $id){
    if ($id == null)
      return new JsonResponse('error');

    if($req->isXmlHttpRequest()){

      $media = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeMedia')->findOneById($id);
      if ($media->getImage() != null) {
        if(file_exists($media->getImage())){
            unlink($media->getImage());
        }
      }
      $media->setImage(null);
      $this->getDoctrine()->getManager()->flush();

      return new JsonResponse(array('message' => 'success'));
    }
  }
    public function addDocMediaAction(Request $req, $id){
    $em = $this->getDoctrine()->getManager();
    if ($id != null) {
      $media = $em->getRepository('TWCOndeBundle:OndeMedia')->findOneById($id);
      if ($media == null) {
        return new JsonResponse("oho2");
      }
    }else{
      return new JsonResponse("oho1");
    }
    if($req->files->get('file')) {
          $files = $req->files->get('file');
          
          foreach ($files as $key => $file) {
              
              $fileName = $media->getId()."_media"."_".rand().".".$file->guessExtension();
              $mimetype = $file->getMimeType();
              $extension = $file->guessExtension();
              $filesize = $file->getSize();
              $fileerror = $file->getError();

              if ($filesize < 15000000 && $fileerror == 0) {

                  $path = 'assets/upload/Media/Doc/';
                  $objectkey = $path.$fileName;
                  $target_dir = $this->get('kernel')->getRootDir() . '/../web/assets/upload/Doc/Media/';
                  $src = $this->get('kernel')->getRootDir() . '/../web/assets/upload/Media/Doc/'.$fileName;
                  $file->move($target_dir , $fileName);
                  
                  $media->setFileName($objectkey);
              }
          }
          $em->persist($media);
          $em->flush();
          return new JsonResponse(array('state' => $this->get( 'translator' )->trans( "notifications.insertion_controller.add_photo.state"),'message' => $this->get( 'translator' )->trans( "notifications.insertion_controller.add_photo.message")));
      } 
  }

  public function deleteDocMediaAction(Request $req, $id){

    if ($id == null)
      return new JsonResponse('error');

    if($req->isXmlHttpRequest()){

      $media = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeMedia')->findOneById($id);
      if ($media->getFileName() != null) {
        if(file_exists($media->getFileName())){
            unlink($media->getFileName());
        }
      }
      $media->setFileName(null);
      $this->getDoctrine()->getManager()->flush();

      return new JsonResponse(array('message' => 'success'));
    }
  }

  public function listArticleAction(Request $req){
    $user = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeUser')->findOneById($this->get('session')->get("user_id"));

    if(!$user){
        return $this->redirectToRoute('twc_onde_homepage');
    }
    $articles = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeArticle')->findAll();

    return $this->render('TWCOndeBundle:Article:listing.html.twig',array('articles'=>$articles));
  }

  public function addArticleAction(Request $req, $id) {
    $user = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeUser')->findOneById($this->get('session')->get("user_id"));

    if(!$user){
        return $this->redirectToRoute('twc_onde_homepage');
    }
    if ($id == null) {
      $article = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeArticle')->findOneBy(array('status'=>'draft'));
      if ($article == null) {
          $article = new OndeArticle();
          $article->setCreationDate(new \DateTime('now'));
          $this->getDoctrine()->getManager()->persist($article);
          $this->getDoctrine()->getManager()->flush();
      }
    }else{
      $article = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeArticle')->findOneBy(array('id'=>$id));
    }
    $pictures = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndePicture')->findAll();

    if($req->isMethod('POST')) {
      if(isset($_POST['title'])){ $article->setTitre($_POST['title']); }
      if(isset($_POST['mediaEditor'])){ $article->setContenu($_POST['mediaEditor']); }
      $article->setStatus('complete');
      $article->setUpdateDate(new \DateTime('now'));

      $this->getDoctrine()->getManager()->persist($article);
      $this->getDoctrine()->getManager()->flush();
      return $this->redirectToRoute('onde_list_article');
    }

    return $this->render('TWCOndeBundle:Article:addArticle.html.twig', array('article'=>$article, 'pictures'=>$pictures));
  }
  public function deleteArticleAction(Request $req, $id){

    if ($id == null)
      return new JsonResponse('error');

    if($req->isXmlHttpRequest()){

      $article = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeArticle')->findOneById($id);
      if ($article != null) {
        foreach ($article as $key => $value) {
          if(file_exists($value->getObjectkey())){
              unlink($value->getObjectkey());
          }
          $this->getDoctrine()->getManager()->remove($value);
        }
      }
      $this->getDoctrine()->getManager()->remove($article);
      $this->getDoctrine()->getManager()->flush();

      return new JsonResponse(array('state' => $this->get( 'translator' )->trans( "notifications.insertion_controller.add_photo.state"),'message' => $this->get( 'translator' )->trans( "notifications.insertion_controller.add_photo.message")));
    }
  }

  public function addImageArticleAction(Request $req, $id){

    $em = $this->getDoctrine()->getManager();
    if ($id != null) {
      $article = $em->getRepository('TWCOndeBundle:OndeArticle')->findOneById($id);
      if ($article == null) {
        return new JsonResponse("oho2");
      }
    }else{
      return new JsonResponse("oho1");
    }
    
    if($req->isXmlHttpRequest()){

      if($req->files->get('file')) {
          $files = $req->files->get('file');
          
          $allowedMimeType = array('image/jpeg', 'image/png', 'image/gif', 'image/tiff');
          
          foreach ($files as $key => $file) {
              
              $fileName = $article->getId()."_article"."_".rand().".".$file->guessExtension();
              $mimetype = $file->getMimeType();
              $extension = $file->guessExtension();
              $filesize = $file->getSize();
              $fileerror = $file->getError();

              if (in_array($mimetype, $allowedMimeType) && $filesize < 15000000 && $fileerror == 0) {

                  $path = 'assets/upload/articles/';
                  $objectkey = $path.$fileName;
                  $target_dir = $this->get('kernel')->getRootDir() . '/../web/assets/upload/articles/';
                  $src = $this->get('kernel')->getRootDir() . '/../web/assets/upload/articles/'.$fileName;

                  $image = new OndeImage();
                  $file->move($target_dir , $fileName);
                  
                  $image->setObjectkey($objectkey);
                  $image->setFileName($fileName);
                  $image->setArticle($article);
                  $em->persist($image);
                  $em->flush();
              }
          }
          return new JsonResponse(array('state' => $this->get( 'translator' )->trans( "notifications.insertion_controller.add_photo.state"),'message' => $this->get( 'translator' )->trans( "notifications.insertion_controller.add_photo.message")));
      } 
    }
  }

  public function deleteImgArticleAction(Request $req, $id){

    if ($id == null)
      return new JsonResponse('error');

    $user = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeUser')->findOneById($this->get('session')->get("user_id"));

    if(!$user){
        return $this->redirectToRoute('twc_onde_homepage');
    }

    if($req->isXmlHttpRequest()){

      $image = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeImage')->findOneById($id);
      if ($image->getObjectkey() != null) {
        if(file_exists($image->getObjectkey())){
            unlink($image->getObjectkey());
        }
      }
      $this->getDoctrine()->getManager()->remove($image);
      $this->getDoctrine()->getManager()->flush();

      return new JsonResponse(array('message' => 'success'));

    }

  }
}
