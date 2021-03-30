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
        
    public function showProfilParents()
    {
    
        $this->render("profil-parents",
        [
               
        ]);
    }
    
    public function showProfilPros()
    {
    
        $this->render("profil-pros",
        [
               
        ]);
    }

    public function showDisponibilite()
    {
    
        $this->render(
            "disponibilite",
        [
               
        ]);
    }
}