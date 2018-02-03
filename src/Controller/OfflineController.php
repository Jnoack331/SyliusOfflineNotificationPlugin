<?php
/**
 * Created by solutionDrive GmbH.
 *
 * @author   :  Julius Noack <noack@solutionDrive.de>
 * @date     :  03.02.18
 * @time     :  12:12
 * @copyright:  2018 solutionDrive GmbH
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OfflineController extends Controller
{
    public function indexAction()
    {
        return $this->render('@App/offline.html.twig');
    }
}