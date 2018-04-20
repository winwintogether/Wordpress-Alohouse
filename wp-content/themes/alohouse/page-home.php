<?php
/**
 * Template Name: Home Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <section class="philosophy section-padding">
  <div class="center-10-col">
  <div class="content">
        <h1 class="title border">Our Mission</h1>
        <p class="lead">The mission of Alo House Recovery Centers is to use ‘connection, not control’ to help our clients achieve autonomy, empowerment, and a sense of community.</p>
    </div>
    </div>
</section>

<div class="two-col-video" data-equalizer data-equalize-on="medium">
  
  <div class="left-col" data-equalizer-watch>
    <div class='home-video'>
    <!-- Video For Mobile -->
      <a data-open="home-video"  class="play-button">Play</a>
      <div class="show-for-small-only">
        <div class="flex-video">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/cgc3mRqj_IM?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        </div> 
      </div>
    </div>
  </div>
  
  
  <!-- Modal Video For Desktop -->
  <div id="home-video" class="large reveal" data-reveal data-reset-on-close="true" itemscope itemtype="http://schema.org/VideoObject">
  <div itemscope itemtype="http://schema.org/VideoObject">
   <div class="flex-video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/cgc3mRqj_IM?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
  </div>  
  </div>


  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>

  <div class="right-col" data-equalizer-watch>
    <h2>Alo Malibu Rehab</h2>
    <p>At Alo House, we have decades of combined experience and expertise working with those who suffer from addiction, from the initial ‘crisis intervention,’ all the way through the inpatient and outpatient treatment levels of care, to aftercare and alumni services. We provide 'evidence-based' <strong>drug and alcohol treatment</strong> that really works, including life-skills building, and experiential, effective guidance in creating and maintaining healthy and lasting recovery.</p>
    <div class="expanded button-group">
     <a href="https://alorecovery.com/testimonials" class="button">Testimonials</a>
     <a href="https://alorecovery.com/treatment-program" class="button">Programs</a>
    </div>
</div>
</div>

<section class="bob-message">
  <div class="two-col">
  <div class="left-col">
  <img src="<?php echo get_template_directory_uri()?>/dist/images/bob_message.png" class="img-circle" alt="Outpatient Location">
  <h5 class='first'>Bob Forrest</h5>
  <h5>Program Co-Founder</h5>
  </div>
  <div class="right-col">
    <blockquote>I want to treat addicts with dignity, love and compassion. I’m going to be honest with them. I’m not going to be mad at them if they don’t like what I’m trying to help them accomplish. If they fail or stumble or are defiant, I’m not going to get into arguments with them. I just want to love, help, encourage, nurture and steer people in a more positive direction of life.</blockquote>
  </div>
  </div>
</section>


<div class="row collapse">
  <div class="medium-3 columns">
    <ul class="tabs vertical" id="example-vert-tabs" data-tabs>
      <li class="tabs-title is-active"><a href="#panel1v" aria-selected="true">Why Choose Alo House?</a></li>
      <li class="tabs-title"><a href="#panel2v">Non-12 Step Philosophy</a></li>
      <li class="tabs-title"><a href="#panel3v">Holistic Addiction Treatment</a></li>
      <li class="tabs-title"><a href="#panel4v">Luxury Inpatient Rehab</a></li>
      <li class="tabs-title"><a href="#panel5v">Young Adult Program</a></li>
      <li class="tabs-title"><a href="#panel6v">Professionals Program</a></li>
      <li class="tabs-title"><a href="#panel7v">On-Site Detox</a></li>
    </ul>
    </div>
    <div class="medium-9 columns">
    <div class="tabs-content vertical" data-tabs-content="example-vert-tabs">
      <div class="tabs-panel is-active" id="panel1v">
        <h2>Why Choose Alo House?</h2>
        <p> <img alt="Non 12 Step Rehab" class="alignleft" src="<?php echo get_template_directory_uri()?>/dist/images/residential_center_200.jpg" alt="">The word ‘Alo’ comes from the Latin, and means to feed, nourish, support, sustain, cherish, and strengthen. The 'Alo' concept reflects our mission to be leaders in the emerging Compassionate Care Model of addiction treatment.</p>

        <p>Our progressive approach to residential treatment has everyone feeling the difference the moment they step onto one of our facilities. We feel that traditional addiction treatment can tend to be punitive and oppressive. So we provide a fresh, evidence-based alternative. Giving our clients an alternative to twelve-step based programs is crucial in this regard.</p>

        <p>It is with this spirit of compassion, combined with our staff's skillfulness, that <strong>we inspire, nurture, and empower our clients to change their own lives.</strong></p>
        <div style="text-align:center;">
        <a href="https://alorecovery.com/why-choose-alo-house/" class="button">Read More</a>
        </div>
      </div>
      <div class="tabs-panel" id="panel2v">
        <h2>Non-12 Step Rehab</h2>
       
        <p> <img alt="Non 12 Step Rehab" class="alignleft" src="<?php echo get_template_directory_uri()?>/dist/images/young_adult_200.jpg" alt="">Alo House Recovery Centers is not a 12-Step Program. We believe there are many different paths to recovery, which includes the 12-Step world for many people.  But because each individual client comes from unique circumstances, we want to work with them to figure out which tools they can use to guide them on the road to recovery from substance abuse. We understand that not everyone has had a positive experience at a drug or alcohol treatment center that practices the 12-Step model. We also don’t agree that addiction treatment programs are the proper venue to practice the 12-Step model.  It is available for free, and is something that we are happy to introduce our clients to, and that they are free to further investigate post-treatment.  <strong>For us, drug and alcohol treatment is built around high-quality, evidence-based clinical care that is rooted in the most current research.</strong></p>
      </div>
      <div class="tabs-panel" id="panel3v">
        <h2>Holistic Addiction Treatment</h2>
        <p><img alt="Holistic Addiction Treatment" class="alignleft" src="<?php echo get_template_directory_uri()?>/dist/images/holistic_200.jpg" alt="">We take a holistic approach to healing at Alo House Recovery Centers. It is imperative to treat the Mind, Body, and Soul.  Decreasing stress while boosting immunity and psychological resilience can help the body cope better, heal more quickly, and maintain health. The holistic approach encourages the patient to include healing strategies that support the whole person. Some of the different holistic addiction healing methods we use at Alo House Malibu Rehab include: Yoga, Meditation, The Equine Vision Ride Program, Gardening at Alo Farms, and regular participation in ceremonies at a Native American Sweat Lodge. </p>

        <p>Rather than subscribing to the ‘disease concept’ of addiction, which can tend to reduce people to their diagnoses, we address the ‘whole person.’ <strong>Each client has a unique story</strong>. We provide care using an intensive, big-hearted style of care, which helps us to really get to know, and to properly treat, each client. <strong>To this end, we boast over a one-to-one staff to client ratio – one of the highest in the industry!</strong></p>
      </div>
      <div class="tabs-panel" id="panel4v">
        <h2>Luxury Rehab Experience</h2>
        <p><img alt="Luxury Rehab Program" class="alignleft" src="<?php echo get_template_directory_uri()?>/dist/images/residential_center_200.jpg" alt="">Alo House Recovery Centers is located in Malibu, California. Malibu is one of the most beautiful and most desirable places to live in the world. The main residential treatment center, situated on a magnificent Equestrian estate, offers a riding arena, stables, delightful rose gardens, and stunning views of Zuma Beach. Each guest room, most of which are fully-private, features a large flat screen TV and semi-private patios. Some of the other amenities include: breakfast, lunch and dinner prepared by a gourmet chef, seven days a week, a jacuzzi, housekeeping services, and an outdoor BBQ area. As a luxury California recovery center, we uphold to the highest standards in treatment.</p>
      </div>
      <div class="tabs-panel" id="panel5v">
        <h2>Young Adult Treatment</h2>
        <p><img alt="Young Adult Drug Rehab" class="alignleft" src="<?php echo get_template_directory_uri()?>/dist/images/detox_200.jpg" alt="">All of our clients face their own particular set of challenges in their pursuit of recovery.  None of these challenges are more unique, and generationally specific, than those faced by our young adult clients.  We have taken this into account, and focused our attention on developing a <a href="https://alorecovery.com/young-adult-addiction-treatment/">unique drug rehab program for young adults</a> who come into our care, one that really works.  And we are continuously innovating and crafting this emerging model of treatment, constantly ensuring that it is addressing the specific quandaries young people face today, and which our other clients may not experience.</p>

        <p>We also understand what makes a young adult treatment center great – the people who work there. <a href="https://alorecovery.com/staff">Our highly skilled, passionate staff</a> is the single most important ingredient to our success. Each of our staff have been hand-picked for their unique ability to reach and engage with our clients. <strong>This is what creates change – the magical moments of connection and transformation that occur between clients and staff, ones that our clients will remember forever.</strong></p>
      </div>
      <div class="tabs-panel" id="panel6v">
        <h2>Professionals Program</h2>
        <p>Alo House offers a <a href="https://alorecovery.com/treatment-program">‘Professionals Program’</a> that helps those who may be high functioning in both the workplace and family life, to regain their footing quickly.  This allow our clients to return to normalcy.  This executive addiction treatment can be both inpatient and outpatient 3 days per week. </p>
      </div>
      <div class="tabs-panel" id="panel7v">
        <h2>Malibu Detox Center</h2>
        <p>Our detox is comfortable, safe, private, confidential and friendly. Our detox facility in Malibu offers luxury amenities and including flat screen TV’s, private rooms, jacuzzi and an on-site chef. Alo House’s <a href="https://alorecovery.com/detox">detoxification services</a> are designed to administer to the severity of the client’s level of intoxication, to achieve a safe and supportive withdrawal from alcohol and/or other drugs, and to effectively facilitate the client’s transition into ongoing services.
</p>
      </div>
    </div>
  </div>
</div>

<div class="testimonials-home">
<div class="center-title">
<h2>Testimonials</h2>
</div>
<div class="inner" data-equalizer>
  <div class="item">
    <blockquote class="smaller" data-equalizer-watch>
      Alo House gave me the support I needed to be able to work on myself. Rather than telling me how to live they shared their experience with me and showed me a healthy way of responding to challenges and participating in the world.
    </blockquote>
  </div>
  <div class="item">
    <blockquote class="smaller" data-equalizer-watch>
      Alo House literally changed my life. Without the care, support and personal attention I received there from not only the staff but the other sober clients, I would not be continuing on to a successful life. 
    </blockquote>
  </div>
  <div class="item">
    <blockquote class="smaller" data-equalizer-watch>
      I’ve been to a lot of treatment centers but none even get close to Alo House. The staff and therapists are second to none, and all the properties are beautiful. This place saved my life.
    </blockquote>
  </div>
  <div class="item">
    <blockquote class="smaller" data-equalizer-watch>
      Alo House is the best facility you can put a loved one in. Don’t even consider looking at other treatment facilities. My son loved it. It was his third treatment center and by far his favorite. We are living with no regrets…”
    </blockquote>
  </div>
  </div>
</div>

<div class="program-boxes">

  <div class="item">
  <div class="inner" style="background:url(<?php echo get_template_directory_uri()?>/dist/images/non_12_step_treatment.jpg) no-repeat center">
  <h4><a href="https://alorecovery.com/non-12-step-rehabilitation/">Non-12 Step Treatment</a></h4>
  </div>
  </div>

  <div class="item">
  <div class="inner" style="background:url(<?php echo get_template_directory_uri()?>/dist/images/young_adult_rehab.jpg) no-repeat center">
  <h4><a href="https://alorecovery.com/young-adult-addiction-treatment/">Young Adult Treatment</a></h4>
  </div>
  </div>

  <div class="item">
  <div class="inner" style="background:url(<?php echo get_template_directory_uri()?>/dist/images/luxury_addiction_treatment.jpg) no-repeat center">
  <h4><a href="https://alorecovery.com/treatment-program">Luxury Treatment Center</a></h4>
  </div>
  </div>

 <div class="item">
  <div class="inner" style="background:url(<?php echo get_template_directory_uri()?>/dist/images/drug_detox_center.jpg) no-repeat center">
  <h4><a href="https://alorecovery.com/detox">Drug and Alcohol Detox</a></h4>
  </div>
  </div>

  <div class="item">
  <div class="inner" style="background:url(<?php echo get_template_directory_uri()?>/dist/images/holistic_addiction_recovery.jpg) no-repeat center">
  <h4><a href="https://alorecovery.com/treatment-program">Holistic Recovery</a></h4>
  </div>
  </div>

   <div class="item">
   <div class="inner" style="background:url(<?php echo get_template_directory_uri()?>/dist/images/photos.jpg) no-repeat center">
  <h4><a href="https://alorecovery.com/photos">Photos</a></h4>
  </div>
  </div>
</div>



 <section class="bg-white section-padding">
      <div class="two-col">
        <div class="left-col">
          <img src="<?php echo get_template_directory_uri()?>/dist/images/jcaho.png" class="img-circle" alt="Accredited Drug Rehab">
        </div>
        <div class="right-col">
          <h4>JOINT COMMISSION ACCREDITED</h4>
          <p>Alo House drug and alcohol treatment center has earned The Joint Commission’s Gold Seal of Approval® for Behavioral Health Care Accreditation. The Gold Seal is a symbol of quality that reflects an organization’s commitment to providing safe and effective care, and is the highest form of accreditation that any treatment center can receive.
        </p>
        </div>
      </div>
    </section>

<?php endwhile; ?>
