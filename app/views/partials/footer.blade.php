	<footer id="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-3">
                    <div class="company_logo wow slideInDown">
                        <h2>ACSR</h2>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="company_address wow slideInDown">
					<a href="{{ action('HomeController@showAboutUs') }}">About Us</a><br>
					<a href="{{ action('HomeController@showOurJourney') }}">Our Journey</a><br>
					<a href="{{ action('HomeController@showObjectives') }}">Aims & Objectives</a><br>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="company_address wow slideInDown">
					<a href="{{ action('HomeController@showByLaws') }}">By Laws</a><br>
					<a href="{{ action('HomeController@showMembershipPolicy') }}">Membership Policy</a><br>
                    <a href="{{ action('HomeController@showPrivacyPolicy') }}">Privacy Policy</a><br>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="company_address wow slideInDown">
						<a href="{{ action('HomeController@showContactUs') }}">Contact Us</a><br>
						<a href="{{ action('HomeController@showPictureGallery') }}">Picture Gallaery</a><br>
						<a href="{{ action('HomeController@showBoardOfDirectors') }}">Board of Directors</a><br>
						<a href="{{ action('HomeController@showManagement') }}">Management</a><br>
                    </div>
                </div>
            </div>
        </div>
    </footer>