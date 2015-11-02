<?php
namespace MMITVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Embed;
use MMITVBundle\Form\Type\UrlFormType;
use Symfony\Component\HttpFoundation\Request;
use MMITVBundle\Entity\Url;
use MMITVBundle\Entity\Video;

class VideosController extends Controller
{
    public function UrlAction()
    {
    $form = $this->createForm(new UrlFormType());
        return $this->render('MMITVBundle:Default:url.html.twig', array('form' => $form->createView()));
    }
    public function indexAction(Request $request)
    {
        $entity = new Url();
        $form = $this->CreateForm(new UrlFormType(),$entity);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('video'));
        }

        return $this->render('MMITVBundle:Default:video.html.twig');
    }

    public  function videoAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MMITVBundle:Url')->findAll();
        var_dump($entity);
        $info = Embed\Embed::create("https://www.youtube.com/watch?v=12Y4aJTwMkg");
        $video =new video();
        $video->setTitre($info->title);
        $video->setDescription($info->Description);
        $video->setUrl($info->url);
        $video->setType($info->type);
        $video->setDate(new \DateTime());
        $video->setDuree((new \DateTime()));
        $em = $this->getDoctrine()->getManager();
        $em->persist($video);
        $em->flush();

        $info->title; //The page title
        $info->description; //The page description
        $info->url; //The canonical url
        $info->type; //The page type (link, video, image, rich)

        $info->images; //List of all images found in the page
        $info->image; //The image choosen as main image
        $info->imageWidth; //The width of the main image
        $info->imageHeight; //The height of the main image

        $info->code; //The code to embed the image, video, etc
        $info->width; //The width of the embed code
        $info->height; //The height of the embed code
        $info->aspectRatio; //The aspect ratio (width/height)

        $info->authorName; //The (video/article/image/whatever) author
        $info->authorUrl; //The author url

        $info->providerName; //The provider name of the page (youtube, twitter, instagram, etc)
        $info->providerUrl; //The provider url
        $info->providerIcons; //All provider icons found in the page
        $info->providerIcon; //The icon choosen as main icon

        $info->publishedDate; //The (video/article/image/whatever) published date

            return $this->render('MMITVBundle:Default:video.html.twig', array('url' => $entity, 'info' =>$info));
    }

    public function directAction()
    {
        $em = $this->getDoctrine()->getManager();
        $v = $em->getRepository('MMITVBundle:Video')->findAll();
        return $this->render('MMITVBundle:Default:direct.html.twig', array('v' => $v));
    }
}