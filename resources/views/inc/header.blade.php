 
<header>
         <div class="size-container">

            <div class="container">
               <div class="logo">
                  <a href="/"><img src="{{ asset('images/logo.png') }}" alt="" /></a>
               </div>

               <div class="social">   
                    <a href="https://www.instagram.com/tancy.pro/" class="btn btn-md btn-blue btn-icon" rel="nofollow" target="_blank"><span class="ico-in"></span></a>
                    <a href="https://www.facebook.com/tancy.pro/" class="btn btn-md btn-blue btn-icon" rel="nofollow" target="_blank"><span class="icon-facebook"></span></a>
                    <a href="https://vk.com/tancypro" class="btn btn-md btn-blue btn-icon" rel="nofollow" target="_blank"><span class="ico-cartico-vk"></span></a>
                   
                </div>

               <div class="user">
                  <div class="user-container">
                        <div class="user-aboniment" data-modal="modal-connect">
                        <a class="btn btn-lg btn-greynew">Связаться с нами</a>
                     </div>
              <div class="user-email"><a href="mailto:dneprdance.co@gmail.com"><img src="http://ptagency.ru/local/templates/tancy_br/img/mail.png" /> <span>dneprdance.co@gmail.com</span></a></div>
                     <div class="user-tel"><a href="tel:+30983694930"  class="phone"> +3 (098) 369 49 30</a> </div>

                    
                  </div> 
               </div> <!-- eo .user -->
            </div> <!-- eo .container -->

            <a class="mobile-switch"><span></span></a>
 
            <div class="menu">
               <ul itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
            <li><a href="/about" @php echo
              (($_SERVER['REQUEST_URI'] == '/about') ? "style='background: #522fbd;color: #fff;'":"")  @endphp   itemprop="url"><span itemprop="name">О нас</span></a></li>

            <li><a href="/uslugi" @php echo
              (($_SERVER['REQUEST_URI'] == '/uslugi') ? "style='background: #522fbd;color: #fff;'":"")  @endphp    itemprop="url"><span itemprop="name">Услуги</span></a></li>

                 <li><a href="/news" @php echo
              (($_SERVER['REQUEST_URI'] == '/news') ? "style='background: #522fbd;color: #fff;'":"")  @endphp   itemprop="url"><span itemprop="name">Новости</span></a></li>

            <li><a href="/artists" @php echo
              (($_SERVER['REQUEST_URI'] == '/artists') ? "style='background: #522fbd;color: #fff;'":"")  @endphp itemprop="url"><span itemprop="name">Артисты</span></a></li>

                      <li><a href="/project" @php echo
              (($_SERVER['REQUEST_URI'] == '/project') ? "style='background: #522fbd;color: #fff;'":"")  @endphp  itemprop="url"><span itemprop="name">Проекты</span></a></li>
 
                 <li><a href="/contact" @php echo
              (($_SERVER['REQUEST_URI'] == '/contact') ? "style='background: #522fbd;color: #fff;'":"")  @endphp  itemprop="url"><span itemprop="name">Контакты</span></a></li>
               
               </ul>
            </div> <!-- eo .menu -->

         </div> <!-- eo .size-container -->
      </header>