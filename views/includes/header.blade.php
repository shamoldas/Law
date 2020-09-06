
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

 <link rel="stylesheet" type="text/css" href="{{url('css/counting.css')}}">








{{-- Header --}}

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src={{url('images/brand.jpg')}} alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src={{url('images/img2.jpg')}} alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src={{url('images/img3.jpg')}} alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

   <br>

     <!-- mission start -->
    <section id="mission" class="pageSection">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-md-6">
                    <h2 class="heading heading--1 heading--underline-small">Hello I'm Shamol Das</h2>
                    <h3>A Corporate Lawyer</h3>
               <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their..</p>
               <p>It is a matter of satisfaction for us that the university has made steady progress in a relatively short period 
               of time in terms of expansion of its physical infrastructure and academic programmes. The HSTU has been growing rapidly
               in terms of quality,
                recognition, activities, number of courses, student intake, staff, outreach and research during the recent years. 
                The university provides multidiscipline education. We have eight faculties such as Agriculture, Computer Science and Engineering,
                Business Studies, Fisheries, Engineering, Veterinary and Animal Science, Science, Social Science and Humanities and one Post-graduate Studies.
                Now we have 45 departments under nine faculties including post graduate studies. 
                Presently 195 international students (undergraduate-179 and postgraduate-16) are studying in this university; 
                they are from Nepal, Bhutan, India, Djibouti, Nigeria and Somalia. We are proud for 
                our international students as the number is the highest among the public universities in Bangladesh. 
               ion has worked with over 500 instructors from the most innovative companies, developing cutting-edge,
               real-world digital education that has empowered more than 100,000 professionals and some of the largest 
               corporations in the world.</p>
            </div>

            <div class="col-md-6">
            <img src={{url('images/Shamol++.jpg')}}  >  
                </div>
            </div>
        </div>
    </section>







         






<section  >
<div class="container">
  <div class="row">
      <br/>
     <div class="col text-center">
    <h2>Some Interesting Fact</h2>
    <p>counter to count up to a target number</p>
    </div>
    
             
    
  </div>

  

    <div class="row text-center">
          <div class="col">
          <div class="counter">
      <i class="fa fa-code fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="3500" data-speed="15000"></h2>
       <p class="count-text ">Our Trusted Clients</p>
    </div>
          </div>

              <div class="col">
               <div class="counter">
      <i class="fa fa-coffee fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="2500" data-speed="15000"></h2>
      <p class="count-text ">Solve Case</p>
    </div>
              </div>

              <div class="col">
                  <div class="counter">
      <i class="fa fa-lightbulb-o fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="1100" data-speed="15000"></h2>
      <p class="count-text ">Awards Win</p>
    </div></div>

              <div class="col">
              <div class="counter">
      <i class="fa fa-bug fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="2300" data-speed="15000"></h2>
      <p class="count-text ">Winning Case</p>
    </div>
              </div>

         </div>
</div>

</section>


<script type="text/javascript">
  
    (function ($) {
  $.fn.countTo = function (options) {
    options = options || {};
    
    return $(this).each(function () {
      // set options for current element
      var settings = $.extend({}, $.fn.countTo.defaults, {
        from:            $(this).data('from'),
        to:              $(this).data('to'),
        speed:           $(this).data('speed'),
        refreshInterval: $(this).data('refresh-interval'),
        decimals:        $(this).data('decimals')
      }, options);
      
      // how many times to update the value, and how much to increment the value on each update
      var loops = Math.ceil(settings.speed / settings.refreshInterval),
        increment = (settings.to - settings.from) / loops;
      
      // references & variables that will change with each update
      var self = this,
        $self = $(this),
        loopCount = 0,
        value = settings.from,
        data = $self.data('countTo') || {};
      
      $self.data('countTo', data);
      
      // if an existing interval can be found, clear it first
      if (data.interval) {
        clearInterval(data.interval);
      }
      data.interval = setInterval(updateTimer, settings.refreshInterval);
      
      // initialize the element with the starting value
      render(value);
      
      function updateTimer() {
        value += increment;
        loopCount++;
        
        render(value);
        
        if (typeof(settings.onUpdate) == 'function') {
          settings.onUpdate.call(self, value);
        }
        
        if (loopCount >= loops) {
          // remove the interval
          $self.removeData('countTo');
          clearInterval(data.interval);
          value = settings.to;
          
          if (typeof(settings.onComplete) == 'function') {
            settings.onComplete.call(self, value);
          }
        }
      }
      
      function render(value) {
        var formattedValue = settings.formatter.call(self, value, settings);
        $self.html(formattedValue);
      }
    });
  };
  
  $.fn.countTo.defaults = {
    from: 0,               // the number the element should start at
    to: 0,                 // the number the element should end at
    speed: 1000,           // how long it should take to count between the target numbers
    refreshInterval: 100,  // how often the element should be updated
    decimals: 0,           // the number of decimal places to show
    formatter: formatter,  // handler for formatting the value before rendering
    onUpdate: null,        // callback method for every time the element is updated
    onComplete: null       // callback method for when the element finishes updating
  };
  
  function formatter(value, settings) {
    return value.toFixed(settings.decimals);
  }
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
  formatter: function (value, options) {
    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
  }
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
  var $this = $(this);
  options = $.extend({}, options || {}, $this.data('countToOptions') || {});
  $this.countTo(options);
  }
});


</script>








<br><br>

    <!-- mission start -->
    <section id="mission" class="pageSection">
        <div class="container">
            <div class="row align-items-center">
              
                    <h2 class="heading heading--1 heading--underline-small">Mission/Vission/Values for the 21<sup>st</sup> Century</h2>
                    <p>Life insurance (or life assurance, especially in the Commonwealth of Nations) is a contract between an insurance policy holder and an insurer or assurer, where the insurer promises to pay a designated beneficiary a sum of money (the benefit) in exchange for a premium, upon the death of an insured person (often the policy holder). Depending on the contract, other events such as terminal illness or critical illness can also trigger payment. The policy holder typically pays a premium, either regularly or as one lump sum. Other expenses, such as funeral expenses, can also be included in the benefits.

Life policies are legal contracts and the terms of the contract describe the limitations of the insured events. Specific exclusions are often written into the contract to limit the liability of the insurer; common examples are claims relating to suicide, fraud, war, riot, and civil commotion.

Modern life insurance bears some similarity to the asset management industry[1] and life insurers have diversified their products into retirement products such as annuities.[2]</p>
<p>The person responsible for making payments for a policy is the policy owner, while the insured is the person whose death will trigger payment of the death benefit. The owner and insured may or may not be the same person. For example, if Joe buys a policy on his own life, he is both the owner and the insured. But if Jane, his wife, buys a policy on Joe's life, she is the owner and he is the insured. The policy owner is the guarantor and they will be the person to pay for the policy. The insured is a participant in the contract, but not necessarily a party to it.


Chart of a life insurance
The beneficiary receives policy proceeds upon the insured person's death. The owner designates the beneficiary, but the beneficiary is not a party to the policy. The owner can change the beneficiary unless the policy has an irrevocable beneficiary designation. If a policy has an irrevocable beneficiary, any beneficiary changes, policy assignments, or cash value borrowing would require the agreement of the original beneficiary.</p>
            
        

           
            </div>
        </div>
    </section>















      <!-- mission start -->
    <section id="mission" class="pageSection">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-md-6">
                    <h2 class="heading heading--1 heading--underline-small">Why ShamolDas/Law</h2>
                    <h3>World-class instructors</h3>
<p>Our cutting-edge curriculum is developed and taught by the world's best digital experts and professionals.</p>

<h3>A hands-on approach</h3>
<p>Our classes offer a project-based learning environment, emphasizing collaboration and immediate feedback.</p>

<h3>Data-driven learning</h3>
<p>Synapse, our custom-built, personalized learning platform provides an unrivaled learning experience.</p>

<h3>An unmatched network</h3>
<p>Gain access to a vibrant community of more than 100,000 professionals around the world.</p>
            
            </div>

            <div class="col-md-6">
            <img src={{url('images/photo-brainstation@2x.jpg')}} class="img-thumbnail">  
                </div>
            </div>
        </div>
    </section>







