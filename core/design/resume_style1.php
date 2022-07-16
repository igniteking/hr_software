<?php
include('../../includes/connection.php');
include('../../includes/global.php');
$user_id = $_GET['user_id'];
$fetch_all_query = "SELECT * FROM resume_data WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $fetch_all_query);

while ($rows = mysqli_fetch_assoc($result)) {
	$first_name = $rows['first_name'];
	$last_name = $rows['last_name'];
	$about = $rows['about'];
	$email = $rows['email'];
	$education_title = $rows['education_title'];
	$education_year = $rows['education_year'];
	$education_from = $rows['education_from'];
	$education_title2 = $rows['education_title2'];
	$education_year2 = $rows['education_year2'];
	$education_from2 = $rows['education_from2'];
	$mobile = $rows['mobile'];
	$address = $rows['address'];
	$work_experience = $rows['work_experience'];
	$address = $rows['address'];
	$profile_pic = $rows['profile_picture'];
	$additional_title = $rows['additional_title'];
	$additional_content = $rows['additional_content'];
}
?>
<html>

<head>

	<title><?php echo $first_name . ' ' . $last_name . " | " . $email; ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />
	<link rel="stylesheet" type="text/css" href="resume.css" media="all" />

</head>

<body>

	<div id="doc2" class="yui-t7">
		<div id="inner">
			<div id="hd">
				<div class="yui-gc">
					<div class="yui-u first">
						<h1><?php echo $first_name . ' ' . $last_name; ?></h1>
						<h3><?php echo $email ?></h3>
					</div>

					<div class="yui-u">
						<div class="contact-info">
							<h3><a id="pdf" href="#">Download PDF</a></h3>
							<h3><a href="<?php echo $email ?>"><?php echo $email ?></a></h3>
							<h3>+91-<?php echo $mobile ?></h3>
						</div>
						<!--// .contact-info -->
					</div>
				</div>
				<!--// .yui-gc -->
			</div>
			<!--// hd -->

			<div id="bd">
				<div id="yui-main">
					<div class="yui-b">

						<div class="yui-gf">
							<div class="yui-u first">
								<h2>Profile</h2>
							</div>
							<div class="yui-u">
								<p class="enlarge">
								<?php echo $about?>
								</p>
							</div>
						</div>
						<!--// .yui-gf -->

						<div class="yui-gf">
							<div class="yui-u first">
								<h2>Skills</h2>
							</div>
							<div class="yui-u">

								<div class="talent">
									<h2>Web Design</h2>
									<p>Assertively exploit wireless initiatives rather than synergistic core competencies. </p>
								</div>

								<div class="talent">
									<h2>Interface Design</h2>
									<p>Credibly streamline mission-critical value with multifunctional functionalities. </p>
								</div>

								<div class="talent">
									<h2>Project Direction</h2>
									<p>Proven ability to lead and manage a wide variety of design and development projects in team and independent situations.</p>
								</div>
							</div>
						</div>
						<!--// .yui-gf -->

						<div class="yui-gf">
							<div class="yui-u first">
								<h2>Technical</h2>
							</div>
							<div class="yui-u">
								<ul class="talent">
									<li>XHTML</li>
									<li>CSS</li>
									<li class="last">Javascript</li>
								</ul>

								<ul class="talent">
									<li>Jquery</li>
									<li>PHP</li>
									<li class="last">CVS / Subversion</li>
								</ul>

								<ul class="talent">
									<li>OS X</li>
									<li>Windows XP/Vista</li>
									<li class="last">Linux</li>
								</ul>
							</div>
						</div>
						<!--// .yui-gf-->

						<div class="yui-gf">

							<div class="yui-u first">
								<h2>Experience</h2>
							</div>
							<!--// .yui-u -->

							<div class="yui-u">

								<div class="job">
									<h2>Facebook</h2>
									<h3>Senior Interface Designer</h3>
									<h4>2005-2007</h4>
									<p>Intrinsicly enable optimal core competencies through corporate relationships. Phosfluorescently implement worldwide vortals and client-focused imperatives. Conveniently initiate virtual paradigms and top-line convergence. </p>
								</div>

								<div class="job">
									<h2>Apple Inc.</h2>
									<h3>Senior Interface Designer</h3>
									<h4>2005-2007</h4>
									<p>Progressively reconceptualize multifunctional "outside the box" thinking through inexpensive methods of empowerment. Compellingly morph extensive niche markets with mission-critical ideas. Phosfluorescently deliver bricks-and-clicks strategic theme areas rather than scalable benefits. </p>
								</div>

								<div class="job">
									<h2>Microsoft</h2>
									<h3>Principal and Creative Lead</h3>
									<h4>2004-2005</h4>
									<p>Intrinsicly transform flexible manufactured products without excellent intellectual capital. Energistically evisculate orthogonal architectures through covalent action items. Assertively incentivize sticky platforms without synergistic materials. </p>
								</div>


								<div class="job last">
									<h2>International Business Machines (IBM)</h2>
									<h3>Lead Web Designer</h3>
									<h4>2001-2004</h4>
									<p>Globally re-engineer cross-media schemas through viral methods of empowerment. Proactively grow long-term high-impact human capital and highly efficient innovation. Intrinsicly iterate excellent e-tailers with timely e-markets.</p>
								</div>

							</div>
							<!--// .yui-u -->
						</div>
						<!--// .yui-gf -->


						<div class="yui-gf last">
							<div class="yui-u first">
								<h2>Education</h2>
							</div>
							<div class="yui-u">
								<h2>Indiana University - Bloomington, Indiana</h2>
								<h3>Dual Major, Economics and English &mdash; <strong>4.0 GPA</strong> </h3>
							</div>
						</div>
						<!--// .yui-gf -->


					</div>
					<!--// .yui-b -->
				</div>
				<!--// yui-main -->
			</div>
			<!--// bd -->

			<div id="ft">
				<p>Jonathan Doe &mdash; <a href="mailto:name@yourdomain.com">name@yourdomain.com</a> &mdash; (313) - 867-5309</p>
			</div>
			<!--// footer -->

		</div><!-- // inner -->


	</div>
	<!--// doc -->


</body>

</html>