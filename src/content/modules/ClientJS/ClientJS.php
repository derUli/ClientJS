<?php

class ClientJS extends Controller
{

    private $moduleName = "ClientJS";

    public function frontendFooter()
    {
        echo Template::executeModuleTemplate($this->moduleName, "script_tag.php");
    }

    public function adminFooter()
    {
        $this->frontendFooter();
    }
}