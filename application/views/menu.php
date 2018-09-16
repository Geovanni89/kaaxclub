<!-- este es menu -->
<nav class="main-nav js-stick">
    <div class="full-wrapper relative clearfix">

        <div class="nav-logo-wrap local-scroll">
            <a href="mp-index.html" class="logo">
                <img src="<?=base_url();?>images/empresa/logo.png" alt="" />
            </a>
        </div>

        <div class="mobile-nav">
            <i class="fa fa-bars"></i>
        </div>
        
        <div class="inner-nav desktop-nav">
            <ul class="clearlist">
            		<?php
						if(!empty($this->menu))
						{
							foreach ($this->menu as $key => $value) 
							{
								if($value[0]==1) //menu simple
								{
									echo '<li class="'.(($paginaActual==$value[2])?'active':'').'"><a href="'.base_url().$value[2].'">'.$value[1].'</a></li>';
								}
								if($value[0]==2) //menu multiple
								{
									echo '<li>
						                    <a href="'.base_url().$value[2].'" class="mn-has-sub">'.$value[1].' <i class="fa fa-angle-down"></i></a>
						                    <ul class="mn-sub">';
							                    foreach ($value[3] as $key1 => $value1) 
							                    {
							                    	echo '<li class="'.(($paginaActual==$value1)?'active':'').'">
								                            <a href="'.base_url().$value1.'">'.$key1.'</a>
								                          </li>';
							                    }
									echo    '</ul>
						                 </li>';
								}
							}
						}
					?>
            </ul>
        </div>
        
    </div>
</nav>