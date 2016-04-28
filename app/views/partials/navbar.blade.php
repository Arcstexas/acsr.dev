{{-- 

<br>
<a href="{{{ action('MembershipController@showConvenienceStoreMembershipApplication') }}}">
CONVENIENCE STORE
MEMBERSHIP APPLICATION
</a>

<br>
<a href="{{{ action('MembershipController@showNonConvenienceStoreMembershipApplication') }}}">
NON-CONVENIENCE STORE
MEMBERSHIP APPLICATION
</a>

<br>
<a href="{{{ action('VendorController@showPreferredVendors') }}}">
PREFERRED VENDORS
</a>

<br>
<a href="{{{ action('VendorController@showVendorsRebateAndBenifitProgram') }}}">
VENDORS REBATE & 
BENEFIT PROGRAM
</a>

<br>
<a href="{{{ action('VendorController@showPromotions') }}}">
VENDOR’S PROMOTIONS
</a>

<br>
<a href="{{{ action('HomeController@showProjects') }}}">
PROJECTS
</a>

<br>
<a href="{{{ action('HomeController@showResourcesAndLearning') }}}">
RESOURCES AND LEARNING
</a>

<br>
<a href="{{{ action('HomeController@showBulletinBoard') }}}">
BULLETIN BOARD
</a>

<br>
<a href="{{{ action('HomeController@showUsefulLinks') }}}">
USEFUL LINKS
</a>

<br>
<a href="{{{ action('HomeController@showPhoneBook') }}}">
PHONE BOOK
</a>

<br>
<a href="{{{ action('HomeController@showImportantAnnouncements') }}}">
IMPORTANT 
ANNOUNCEMENTS	 
</a>	
 --}}

      <!-- TOP NAV WITH LOGO -->  
      <header>
         <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo hide-l">
                     <a href="{{{ action('HomeController@showHome') }}}">DESIGN <br /><strong>THEME</strong></a>
                  </div>                  
                  <p class="nav-text">Custom menu text</p>
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                        <li><a href="{{{ action('HomeController@showHome') }}}">HOME</a>
                        </li>
                        <li><a href="#">MEMBERSHIP</a>
                            <ul>
                                <li><a>Convenience Store<br>Membership Application</a></li>
                                <li><a>Non-Convenience Store<br>Membership Application</a></li>
                                <a href="{{{ action('MembershipController@showConvenienceStoreMembershipApplication') }}}" target="_blank"><li>Convenience Store<br>Membership Application</li></a>
                                <a href="{{{ action('MembershipController@showNonConvenienceStoreMembershipApplication') }}}" target="_blank"><li>Non-Convenience Store<br>Membership Application</li></a>
                            </ul>
                        </li>
                        <li><a href="services.html">Services</a>
                        </li>
                     </ul>
                  </div>
                  <ul class="s-12 l-2" class="acsr">
                     <li class="logo hide-s hide-m">
                        <a href="{{{ action('HomeController@showHome') }}}"><img src="../img/acsr_logo.png"></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                        <li><a href="gallery.html">Gallery</a>
                        </li>
                        <li>
                           <a>Vendor Info</a>               
                           <ul>
                              <li><a>Vendor Promotion</a>
                              </li>
                              <li><a>Preferred Vendor</a>
                              </li>
                              <li><a>Vendors Rebate & <br>Benefit Program</a>                 
                              </li>
                           </ul>
                        </li>
                        <li><a href="contact.html">Contact</a>
                        </li>
                     </ul> 
                  </div>
               </div>
            </div>
         </nav>
      </header>