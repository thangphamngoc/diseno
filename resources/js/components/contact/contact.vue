<template>
	<div id="main-content" class="site-main clearfix no-padding">
		<div id="content-wrap">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 no-padding contact-blog">
						<div id="site-content" class="site-content clearfix">
							<div class="item-content">
								<div class="cbr-headings text-center">
									<h2 class="heading no-margin">Drop us a line</h2>
								</div>

								<div class="description text-center margin-bottom-30"><span>Please let us know if you have a question, want to leave a comment, or would like further information about Suchen Direction WP</span></div>

								<form action="./includes/contact/contact-process.php" method="post" class="contact-form wpcf7-form" novalidate="novalidate">
									<span class="form-control-wrap your-name">
										<input type="text" tabindex="1" id="name" name="name" value="" class="wpcf7-form-control" placeholder="Your Name" required="">
									</span>
									<span class="form-control-wrap your-email">
										<input type="email" tabindex="2" id="email" name="email" value="" class="wpcf7-form-control" placeholder="Your Email" required="">
									</span>
									<span class="form-control-wrap your-message">
										<textarea name="message" tabindex="5" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Your review" required=""></textarea>
									</span>
									<div class="wrap-submit text-center">
										<input type="submit" value="Send Mail" class="submit wpcf7-form-control wpcf7-submit" id="submit" name="submit">
									</div>
								</form>
								<!-- <div class="social-media">
									<a href="https://www.facebook.com/pages/SAOTA-Stefan-Antoni-Olmesdahl-Truen-Architects/158867007525510" target="_blank">
										<i class="fa fa-facebook-square"></i>
									</a>
									<a href="https://twitter.com/_saota" target="_blank">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
									<a href="https://www.pinterest.com/saota/" target="_blank">
										<i class="fa fa-pinterest-p" aria-hidden="true"></i>
									</a>
									<a href="https://www.instagram.com/_saota/" target="_blank">
										<i class="fa fa-instagram" aria-hidden="true"></i>
									</a>
								</div> -->
							</div>
						</div>
						<div id="sidebar" class="google-map clearfix">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.03978655448!2d105.79792991479435!3d21.031093985997064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab41363f1e4d%3A0xd92553276fcb0264!2zOTMgxJDGsOG7nW5nIEPhuqd1IEdp4bqleSwgUXVhbiBIb2EsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1597424207440!5m2!1svi!2s" frameborder="0" style="width: 100%;height: 100vh;border: 0px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<style type="text/css"></style>
<script type="text/javascript">
	export default {

		data() {
			return {
            // listTask:{},
            // id:0,
            // name:'',
            // content:'',
            // linkSound:'',
            // status:'',
             // form: new Form({
          //       id: '',
          //       name:'',
                // content:'',
                // linkSound:'',
                // status:'',
          //           }),
          // mySVG: require('/home-svg.svg');

      }
  },
  mounted(){
    // let recaptchaScript1 = document.createElement('script');
    // recaptchaScript1.setAttribute('src', 'js/gmap3.min.js');
    // document.head.appendChild(recaptchaScript1);
    // let recaptchaScript3 = document.createElement('script');
    // recaptchaScript3.setAttribute('src', 'js/maps.js');
    // document.head.appendChild(recaptchaScript3);
    // let recaptchaScript2 = document.createElement('script');
    // recaptchaScript2.setAttribute('src', 'http://code.jquery.com/jquery-1.11.2.min.js');
    // document.head.appendChild(recaptchaScript2);

    

},
// ready () {
// 	    $(document).ready(function ($) {
// 	      $('.sample1').lightCarousel();
// 	    })
// 	  },
methods: {
        // loadTask(page = 1){
        //  // axios.get("/api/loadtasks?page=" + page).then(({ data }) => (this.listTask = data));

        // }
    },
    created() {

        // this.loadTask();
        // axios.get('/api/getAllUsers').then(({ data }) => (this.users = data));
    },
}
</script>
