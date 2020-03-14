<?php
namespace App\Admin\Extensions\Nav;

class Links
{
    public function __toString()
    {
        return <<<HTML
        

<li>
    <a href="http://naughtyorniceanalytics.herokuapp.com/">
      <i class="fa fa-flag-o"></i>
      <span class="label label-danger"></span>
    </a>
</li>

HTML;
    }
}