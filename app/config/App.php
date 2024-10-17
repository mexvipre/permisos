<?php

const SERVERURL = "http://localhost/permisos/";
const COMPANY = "SENATI";
const VERSION  = "1.0";
//configuracion horaria


//recursos  - HELPERES...
function renderContentHenader($title, $home ,$path){
  return "
        <div class='content-header'>
        <div class='container-fluid'>
          <div class='row mb-2'>
            <div class='col-sm-6'>
              <h1 class='m-0'>{$title}</h1>
            </div><!-- /.col -->
            <div class='col-sm-6'>
              <ol class='breadcrumb float-sm-right'>
                <li class='breadcrumb-item'><a href='{$path}'>{$home}</a></li>
                <li class='breadcrumb-item active'>{$title}</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
  ";
}
?>