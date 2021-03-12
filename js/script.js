      
    $(document).ready(function() {
        $('body').bind('cut copy paste', function (e) {
            e.preventDefault();
        })
        $(".protect").on("contextmenu", function(e) {
            return false;
        })
    })

    window.addEventListener("load", function(){
        document.querySelector(".preloader").classList.add("opacity-0");
        setTimeout(function() {
            document.querySelector(".preloader").style.display = "none";
        },50);
    });
    
    
    const nav = document.querySelector(".nav"),
          navList = nav.querySelectorAll("li"),
          totalNavList = navList.length,
          allSection = document.querySelectorAll(".section"),
          totalSection = allSection.length;


    for (let i = 0; i < totalNavList; i++){
        const a = navList[i].querySelector("a");
        a.addEventListener("click", function(){

            for(let i = 0; i < totalSection; i++){
                allSection[i].classList.remove("back-section");
            }

            for (let j = 0; j < totalNavList; j++){
                if(navList[j].querySelector("a").classList.contains("active")){
                    allSection[j].classList.add("back-section");
                }

                navList[j].querySelector("a").classList.remove("active");
            }
            this.classList.add("active");

            showSection(this);
            if(window.innerWidth < 1200){
                asideSectionTogglerBtn();
            }
        });
    } 

    function showSection(element) {
        for(let i = 0; i < totalSection; i++){
            allSection[i].classList.remove("active");
        }
        const target = element.getAttribute("href").split("#")[1];
        document.querySelector("#"+target).classList.add("active");
    }


    const navTogglerBtn = document.querySelector(".nav-toggler"),
          aside = document.querySelector(".aside");

    navTogglerBtn.addEventListener("click", () => {
        asideSectionTogglerBtn();
    });

    function asideSectionTogglerBtn(){
        aside.classList.toggle("open");
        navTogglerBtn.classList.toggle("open");
    }

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }
  
      //form submit
      var frm1 = $('#contact-form');
      var res_message;
  
      frm1.submit(function (e) {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var subject = document.getElementById("subject").value;
        var message = document.getElementById("message").value;
        e.preventDefault();
        if (name == "") {
          res_message = "Please, enter your name!";
          toastr.error(res_message);
        }
        else if ( email == ""){
          res_message = "Please, enter your valid email!";
          toastr.error(res_message);
        }
        
        else if ( subject == ""){
          res_message = "Please, enter subject!";
          toastr.error(res_message);
        }
        else if ( message == ""){
          res_message = "Please, write your message!";
          toastr.error(res_message);
        }
        else {
          $.ajax({
            type: 'POST',
            url: 'php/action_page.php',
            data: frm1.serialize(),
            datatype: 'json',
            success: function (response) {
              data=JSON.parse(response);
              if (data.back_msg == 'Something went wrong!!') {
                document.getElementById('contact-form').reset();
                grecaptcha.reset();
                res_message = data.back_msg;
                toastr.error(res_message);
              }
              else if ( data.back_msg == 'All fields are required') {
                  res_message = "All fields are required Or Invalid Input."; 
                  toastr.error(res_message);
              }
              else if ( data.back_msg == 'Email must have an at-sign (@)') {
                  res_message = data.back_msg; 
                  toastr.error(res_message);
              }
              else if ( data.back_msg == 'Done') {
                  document.getElementById('contact-form').reset();
                  grecaptcha.reset();
                  res_message = 'I will contact you soon..';
                  grecaptcha.reset();
                  toastr.success(res_message);
              }
              else if ( data.back_msg == 'val failed') {
                  grecaptcha.reset();
                  res_message = 'Select Captcha Or Try later!'; 
                  toastr.error(res_message);
              }
              else {
                  document.getElementById('contact-form').reset();
                  grecaptcha.reset();
                  res_message = 'Something Went Wrong! Try later..'; 
                  toastr.error(res_message);
              }
              
            },
            error: function (data) {
              document.getElementById('contact-form').reset();
              grecaptcha.reset();
              res_message = 'Something Went Wrong! Try later..';
              toastr.error(res_message);
            }
          });
        }
      });


