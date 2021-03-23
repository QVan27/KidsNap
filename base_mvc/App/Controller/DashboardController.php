<?php
namespace App\Controller;

use Core\Controller\Controller;


class DashboardController extends Controller{


    /**
     * Show Parents dashboard
     *
     * @return void
     */
    public function showParents()
    {

        $this->render("dashboard-parents",
        [
           
        ]);
    }

    /**
     * Show Pros dashboard
     *
     * @return void
     */
    public function showPros()
    {

        $this->render("dashboard-pros",
        [
           
        ]);
    }

}