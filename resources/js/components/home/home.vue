<template>
	<div class="slider" id="slider">
        <div class="slItems">
            <div class="slItem" style="background-image: url('images/1.jpg');">
                <div class="slText">
                    <h2>
                        <a href="https://www.saota.com/project/uluwatu/">Uluwatu</a>
                    </h2>
                    <div class="project-location">
                    Bali, Indonesia
                    </div>
                </div>
            </div>
            <div class="slItem" style="background-image: url('images/2.jpg');">
                <div class="slText">
                   <h2>
                        <a href="https://www.saota.com/project/uluwatu/">Uluwatu</a>
                    </h2>
                    <div class="project-location">
                    Bali, Indonesia
                    </div>
                </div>
            </div>
            <div class="slItem" style="background-image: url('images/3.jpg');">
                <div class="slText">
                    <h2>
                        <a href="https://www.saota.com/project/uluwatu/">Uluwatu</a>
                    </h2>
                    <div class="project-location">
                    Bali, Indonesia
                    </div>
                </div>
            </div>
            <div class="slItem" style="background-image: url('images/4.jpg');">
                <div class="slText">
                    <h2>
                        <a href="https://www.saota.com/project/uluwatu/">Uluwatu</a>
                    </h2>
                    <div class="project-location">
                    Bali, Indonesia
                    </div>
                </div>
            </div>
            <div class="slItem" style="background-image: url('images/4.jpg');">
                <div class="slText">
                    <h2>
                        <a href="https://www.saota.com/project/uluwatu/">Uluwatu</a>
                    </h2>
                    <div class="project-location">
                    Bali, Indonesia
                    </div>
                </div>
            </div>
            <div class="slItem" style="background-image: url('images/2.jpg');">
                <div class="slText">
                    <h2>
                        <a href="https://www.saota.com/project/uluwatu/">Uluwatu</a>
                    </h2>
                    <div class="project-location">
                    Bali, Indonesia
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>
<style>
  /*@import 'css/slider.css';*/
</style>

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
    let recaptchaScript = document.createElement('script');
    recaptchaScript.setAttribute('src', 'http://code.jquery.com/jquery-latest.min.js');
    document.head.appendChild(recaptchaScript);
    let recaptchaScript1 = document.createElement('script');
    recaptchaScript1.setAttribute('src', 'js/slider.min.js');
    document.head.appendChild(recaptchaScript1);
    let recaptchaScript2 = document.createElement('script');
    recaptchaScript2.setAttribute('src', 'js/home-slider.js');
    document.head.appendChild(recaptchaScript2);
    // let recaptchaScript3 = document.createElement('script');
    // recaptchaScript3.setAttribute('src', 'js/2.js');
    // document.head.appendChild(recaptchaScript3);
    // (function(){
    //     document.getElementById('slider').rbtSlider({
    //         height: '100vh', 
    //         'dots': true,
    //         'arrows': true,
    //         'auto': 3
    //     });
    // });

    //  var _gaq = _gaq || [];
    //   _gaq.push(['_setAccount', 'UA-36251023-1']);
    //   _gaq.push(['_setDomainName', 'jqueryscript.net']);
    //   _gaq.push(['_trackPageview']);

    //   (function() {
    //     var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    //     ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    //     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    //   });
     
    

},
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





