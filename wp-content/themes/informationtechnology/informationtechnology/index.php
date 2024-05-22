<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package informationTechnology
 */

get_header();
?>

	<main id="primary" class="site-main">

	
    <!------------------------------------------- home start------------------------------------------------>

	<section class="home">
    <div class="home-container">
        <div class="left-text">
            <h1>Master Your IT Universe: <br> Real-Time Insights With <br> ManageEngine's AD AuditPlus</h1>
            <p>Meet AD and Windows Server auditing, security, and compliance needs with <br> ManageEngine AD Audit Plus</p>
        </div>
        <div class="right-text">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/image/home-right.png' ); ?>" class="svg-right-1"style=" padding-top: 5%;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/image/leftcorner.png' ); ?>"class="svg-right-2" >
        </div>
    </div>
</section>

        <!------------------------------------------- home end------------------------------------------------>
        <!------------------------------------------- section text start ------------------------------------------------>
        <section class="text-section" style="padding: 3%;">
            <div class="second-container">
                <div class="left-side">
                    <p>In an era where IT landscapes are increasingly complex and security threats are more
                        sophisticated,
                        conducting regular internal and external IT audits becomes essential. Learn how ManageEngine
                        ADAudit Plus can help you keep your Active Directory (AD), Azure AD, file servers (Windows,
                        NetApp, EMC, Synology and Hitachi), Windows servers, and Workstations secure and compliant by
                        providing full visibility into all activities.
                    </p>
                    <p>From this video guide, you will understand how to:</p>
                    <ul class="disc-list">
                        <li>Audit your Windows AD environment in real time, the easy way.</li>
                        <li>Identify the source of account lockouts.</li>
                        <li>Get real-time alerts via email whenever a configured AD change event occurs.</li>
                        <li>Audit every single change made to Group Policy Objects.</li>
                        <li>Fend off insider threats with User Behavior Analytics.</li>
                        <li>Monitor and report on Service Accounts in your AD environment.</li>
                    </ul>
                </div>
                <div class="right-side">
                    <div class="form">
                        <h1 style="color: #111192;">Download the video guide</h1>
                        <div class="form-group side-input">
                            <input type="text" class="form-control" placeholder="First Name">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Company Name">
                        </div>
                        <div class="form-group dropdown-container side-input">
                            <input type="text" class="form-control" placeholder="Job title">
                            <select class="form-control">
                                <option value="" disabled selected>Company size</option>
                                <option value="small">1-10 employees</option>
                                <option value="medium">11-50 employees</option>
                                <option value="large">51-200 employees</option>
                                <option value="xlarge">201-500 employees</option>
                                <option value="xxlarge">500+ employees</option>
                            </select>
                        </div>
                        <div class="form-group dropdown-container side-input">
                            <select class="form-control">
                                <option value="" disabled selected>Country</option>
                                <option value="usa">United States</option>
                                <option value="canada">Canada</option>
                                <option value="uk">United Kingdom</option>
                                <option value="australia">Australia</option>
                                <option value="germany">Germany</option>
                                <option value="france">France</option>
                                <option value="japan">Japan</option>
                                <option value="china">China</option>
                                <option value="india">India</option>
                                <option value="brazil">Brazil</option>
                            </select>
                            <select class="form-control">
                                <option value="" disabled selected>Industry</option>
                                <option value="tech">Technology</option>
                                <option value="finance">Finance</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="education">Education</option>
                                <option value="manufacturing">Manufacturing</option>
                                <option value="retail">Retail</option>
                                <option value="hospitality">Hospitality</option>
                                <option value="transportation">Transportation</option>
                                <option value="construction">Construction</option>
                                <option value="energy">Energy</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group-checkbox">
                        <label>
                            <input type="checkbox" class="form-control-checkbox">
                            <span> By downloading this content, you are giving permission to be contacted by a
                                ManageEngine representative or 3rd party in regards to this content (by phone or
                                email)</span>
                        </label>

                    </div>
                    <div class="form-group-checkbox">
                        <label>
                            <input type="checkbox" class="form-control-checkbox">
                            <span> I agree to receive information, tips, and offers about ManageEngine Products and
                                Services</span>
                        </label>

                    </div>

                    <button type="button" class="btn-submit">Submit</button>
                </div>
            </div>
        </section>
        <!-- ----------------------------text section------------------------------------------------>
		<section class="IndustyInfo">
            <div class="Industry-text">
                <div class="Industry-image" >
					<img src="<?php echo esc_url( get_template_directory_uri() . '/image/img1.png' ); ?>" style="width: 100%; padding-top: 5%;">

					
                </div>
                <div class="Industry-about">
                    <div class="heading-description"><h1>About<br> ManageEngine</h1> </div>
                    <div class="Industry-para">
                        ManageEngine is a leading provider of IT management software, offering solutions for service desk,
                        operations management, Active Directory management, log analytics, and more. Over 180,000
                        organizations
                        across 190 countries trust ManageEngine to maximize the performance of their IT infrastructure.
                        ManageEngine is part of the Zoho Corporation, one of the world's most prolific software companies. 
                    </div>
                    <div class="blank-div"></div>

                </div>
            </div>
        </section>
	</main><!-- #main -->

<?php

get_footer();
