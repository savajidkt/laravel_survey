<!DOCTYPE html>
<html>
  <head>
<style>

@import url('http://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');

@import url('http://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    vertical-align: middle;
    font-family: 'Work Sans', sans-serif, Arial;
  }

  h1,h2,h3 {
    font-family: 'Roboto Condensed', sans-serif;
  }

  p {
    font-family: 'Work Sans', sans-serif, Arial; font-size:13px; line-height:18px;
  }

  .Bandelli-Associates-Logo {
  width: 473px;
  height: 141px;
  }

  .page1-intro-red {
  font-family: 'Roboto Condensed', sans-serif;
  font-style: normal;
  font-weight: 700;
  font-size: 120px;
  line-height: 114px;
  color: #DB0707;
  margin-top:100px;
  }

  .page1-subhead {
  font-family: 'Roboto Condensed', sans-serif;
  font-style: normal;
  font-weight: 400;
  font-size: 24px;
  line-height: 20px;
  color: #000000;
  letter-spacing: 0.09em;
  text-transform: uppercase;
  margin-top:20px;

  margin-bottom:30px;
  }


  .page1_box_yellow {
    width: 50px;
    height: 44px;
    background: linear-gradient(69.06deg, #FFE580 18.25%, #FFCC01 90.57%);
    border-radius: 10.9413px;
    background:#FFCC01;
    flex: none;
    order: 0;
    flex-grow: 0;
  }

  .page1_box_green {
    width: 50px;
    height: 44px;
    background: linear-gradient(90deg, #A9EB57 0%, #7FB936 100%);
    border-radius: 10.9413px;
    background:#7FB936;
    flex: none;
    order: 0;
    flex-grow: 0;
  }

  .page1_box_purple {
    width: 50px;
    height: 44px;
    background: linear-gradient(252.33deg, #6700AD 12.08%, #A75FD3 87.92%);
    border-radius: 10.9413px;
    background:#A75FD3;
    flex: none;
    order: 0;
    flex-grow: 0;
  }

  .page1_box_blue {
    width: 50px;
    height: 44px;
    background: linear-gradient(97.5deg, #B4C9FF 5.24%, #2D63ED 93.61%);
    border-radius: 10.9413px;
    background:#2D63ED;
    flex: none;
    order: 0;
    flex-grow: 0;
  }

  .page1_box_orange {
    width: 50px;
    height: 44px;
    background: linear-gradient(108.83deg, #FFB782 22.51%, #FF8E3A 97.08%);
    border-radius: 10.9413px;
    background:#FF8E3A;
    flex: none;
    order: 0;
    flex-grow: 0;
  }

  th, td {
    text-align:left;
    padding: 4px 4px 4px 0;
  }

  .page1_table {
    font-family: 'Roboto Condensed', sans-serif;
  }

  .page1_copyrite {
    font-size:12px;
    font-family: 'Roboto Condensed', sans-serif;
    color:#000000;
  }

  .page_head {
    font-family: 'Roboto Condensed', sans-serif;
    font-size:60px;
    padding: 0;
    padding-bottom:10px;
    margin:0 0 40px 0;
    border-bottom:2px solid red;
  }

  .pagestart {
    position:relative;
    min-height:1300px;
  }
  .footerblock {
    background: #EAEBED;
    padding: 5px 20px;
    display:block;
    align-items:center;
    font-family: 'Work Sans', sans-serif, Arial;
    position: absolute;
    bottom: 0;
    width:100%;
  }
  .copyright {
    position: absolute;
    bottom: 0;
  }
  .flogo {
    width:120px;
  }
  .flogo img {
    max-width:100%; height:auto;
  }
  .footerblock .textname, .footerblock .pagename {
    font-family: 'Work Sans', sans-serif, Arial;
  }
  .page4_head {
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 20px;
    padding-bottom:7px;
    margin-bottom:15px;
  }

  .relating_box {
    border-radius: 3px;
    border: 1px solid #cccccc;
    background: #FFFFFF;
    padding: 5px 15px;
    font-family: 'Work Sans', sans-serif, Arial;
  }
  .relating_box .headbox {
    font-size: 19px;
    line-height: 19px;
    font-family: 'Roboto Condensed', sans-serif;
  }
  .relating_box .ratbig {
    font-family: 'Roboto Condensed', sans-serif;
  }
  .rat_lines {
    margin-bottom:10px;
    font-size: 12px;
  }
  .rat_lines .number {
    color:#6F6F71;
    font-size: 12px;
    text-align:right;
  }
  .text {
    color:#6F6F71;
  }

  .subhead_top {
    color:#3D3F42;
    font-size: 18px;
    font-family: 'Roboto Condensed', sans-serif;
  }
  .head_top {
    color:#000000;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 44px;
    margin:0; padding:0;
  }

  .topgraybox {
    background: #FFFFFF;
    border: 1px solid #E7E8F2;
    border-radius: 3px;
    padding:5px 20px 7px 20px;
    margin:30px 0 40px 0;
    font-family: 'Work Sans', sans-serif, Arial;
  }
  .report_head {
    margin:0; padding:0; font-size:30px; color:#000000;
  }

  ul {
    /* margin:0;
    padding:0 0 0 10px;  */
    list-style-type: disc;
    list-style-position: inside;
    font-family: 'Work Sans', sans-serif, Arial; font-size:14px; color:#3D3F42;
  }
  ul li { list-style-type: disc; font-size:18px; line-height:24px; margin-bottom:4px; }
  p.report_p {
    font-size:18px; line-height:26px; color:#3D3F42;
  }
  p {
    margin-bottom:20px; font-size:18px; line-height:26px; color:#3D3F42;
  }

  .left_right_table {
    border-bottom: 1px solid #E6E6E6;
    padding-bottom:15px;
    margin-bottom:15px;
  }
  .left_right_table td, .left_right_table th {
    padding-bottom:4px; vertical-align:top;
    font-size: 16px;
    line-height: 20px;
  }
  .left_right_table th { width:300px; padding-right:10px; text-align:right; }
  
</style>

  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="p1-title-page" />
    
<!-- page 1 start -->

<div class="pagestart page1">
    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
      <td> &nbsp; </td>
        <td class="Bandelli-Associates-Logo">
        <img
            class="Bandelli-Associates-Logo"
            src="{{asset('pdf/img/bandelli-associates-logo-1-1@2x.png')}}"
            alt="Bandelli-Associates-Logo 1"
          />
        </td>
      </tr>
    </table>

    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top; font-family: 'Roboto Condensed', sans-serif;" cellpadding="0" cellspacing="0">
      <tr>
      <td>

      <div class="page1-intro-red">
      Relational Intelligence Assessment
    </div>

    <div class="page1-subhead">
    5 Essenital Skills to Build Life-Changing Relationships
    </div>

      </td>
        
      </tr>
    </table>


    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0" >
      <tr>
      <td class="page1_box_yellow">
      </td>

      <td style="width:30px;"> &nbsp; </td>

      <td class="page1_box_green">
      </td>

      <td style="width:30px;"> &nbsp; </td>

      <td class="page1_box_purple">
      </td>

      <td style="width:30px;"> &nbsp; </td>

      <td class="page1_box_blue">
      </td>

      <td style="width:30px;"> &nbsp; </td>

      <td class="page1_box_orange">
      </td>

      <td> &nbsp;
      </td>

      
        
      </tr>
    </table>

    <div style="height:5px; border-top: 2px solid #DB0707; margin-top:100px;"> &nbsp; </div>

    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top; font-family: 'Roboto Condensed', sans-serif;" cellpadding="0" cellspacing="0" class="page1_table">
      <tr>
        <th style="width: 350px;">
        Report for
        </th>
        <th style="width: 350px;">
        ID
        </th>
        <th>
        Date taken
        </th>
      </tr>
      <tr>
        <td style="width: 350px;">
        John Doe
        </td>
        <td style="width: 350px;">
        0000007
        </td>
        <td>
        MM/DD/YYYY
        </td>
      </tr>
    </table>


    <div style="height:5px; margin-top:180px;"> &nbsp; </div>

    <div class="copyright">
      <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top; font-family: 'Roboto Condensed', sans-serif;" cellpadding="0" cellspacing="0">
        
        <tr>
          <td class="page1_copyrite">
          © 2022 Bandelli & Associates. All rights reserved.
          </td>
          
        </tr>
      </table>
    </div>
</div>
<div style="page-break-after: always;"></div>
<!-- page 1 End -->




<!-- page 2 Start -->
<div class="pagestart page2">

  <h2 class="page_head">Introduction</h2>

  <p><b>Relational Intelligence (RI) is the ability to successfully connect with people and build strong, long-lasting relationships.</b> This is a critically important skill in business, where today's leaders need to create cultures of excellence that are relationship-oriented and foster great employee engagement. When put into practice, Relational Intelligence enables leaders to effectively communicate with employees from different backgrounds, cultures, and experiences. It lays the groundwork for having a positive and meaningful impact on the development of employees in your organization. Relationally intelligent leaders are <b>intentional</b> and <b>authentic</b> in how they build relationships. They create the conditions in which employees can bring their true selves to work. When this happens, organizations build inclusive cultures where people feel valued, heard, and a sense of belonging and purpose in their work and the business.</p>

  <p>Based on more than 20 years of research on leadership, relationships, and influence, Dr. Adam C. <b>Bandelli developed the Bandelli Relational Intelligence Model.</b> This groundbreaking work originated from his doctoral studies at the University of South Florida where he completed his dissertation focused on identifying the key skills leaders need to build dynamic, life-changing relationships with their employees. Today, the <b>Bandelli Relational Intelligence Model</b> focuses on five essential skills: (1) Establishing Rapport, (2) Understanding Others, (3) Embracing Individual Differences, (4) Developing Trust, and (5) Cultivating Influence. Research conducted by organizational psychologists at Bandelli & Associates has found that these five skills are related and can predict key organizational performance outcomes including: growth mindset, employee engagement, organizational commitment, employee retention, and financial profitability.</p>

  <p>To assess the Relational Intelligence Model, Bandelli & Associates has developed the <b>Bandelli Relational Intelligence Assessment<sup>®</sup></b>. This assessment provides leaders with a deep understanding of their strengths and development opportunities related to each of the five skills of Relational Intelligence. The test was designed for leaders ranging from senior executives in the C-suite to leaders on the frontlines. Our data science and analytics team developed the assessment by testing a rigorous psychometric validation process on thousands of leaders across different industries and business sectors. In the following pages, you will see detailed definitions of the Relational Intelligence skills and where you stand on each of the five dimensions, as well as the potential relational derailers that leaders need to avoid and which of these might be risk factors for you.</p>

  <div class="footerblock">

    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td style="width:140px;"> 
          <div class="flogo">
            <img
              class="Bandelli-Associates-Logo"
              src="{{asset('pdf/img/bandelli-associates-logo-1-1@2x.png')}}"
              alt="Bandelli-Associates-Logo 1"
            />
          </div> 
        </td>
        <td style="border-left:2px solid #ccc; padding-left: 20px;"> 
              <div class="textname">
          Bandelli Relational Intelligence Assessment
          </div> 
        </td>
        <td> &nbsp; </td>
        <td> <div class="pagenumber">2</div> </td>

      </tr>
  </table>

  </div>
</div>
<div style="page-break-after: always;"></div>
<!-- page 2 End -->



<!-- page 3 Start -->
<div class="pagestart page3">

  <h2 class="page_head">How to Use this Report</h2>

  <p>There are some important points to keep in mind as you read this report. First, Relational Intelligence is a skill set that can be learned and developed over time. Just because you score within a specific range does not mean you cannot make improvements in that area. The Bandelli Relational Intelligence Assessment® was designed to raise your self-awareness and give you insights about your relationship-building skills as a leader today. Your results are a data point that can be used in conjunction with other leadership development activities (e.g., development planning, coaching, goal setting, mentoring) to help you grow.</p>

  <p>Second, relationships are reciprocal. This assessment will give you insights into where you can make improvements in how you go about building relationships. However, for a relationship to thrive, there must be a committed and continuous investment made by two people. Practicing these skills will help you to start this process with others.</p>

  <p>Lastly, Relational Intelligence is the quintessential skill set required to effectively lead people, teams, and organizations. When you learn these five skills, put them into practice, and begin modeling them for others, it dramatically improves the quality of your relationships. It takes time, energy, and effort to make relationships work. By developing your Relational Intelligence, you can have a lasting positive impact on others along your leadership journey. </p>

  <p> &nbsp; </p>
  <p> &nbsp; </p>

  <div style="position:relative;">
    <div style="background:#F2F2F2; padding:20px 30px 30px 50px; width:80%; position:absolute;">
    <p style="font-family: 'Roboto Condensed', sans-serif; font-size:20px; line-height:30px; margin-bottom:4px;">“When your relationships are strong, they serve as a gateway to your professional and personal growth. Our lives are changed by the people around us. With Relational Intelligence, you can be intentional and authentic about how you build connections with others. If you are purposeful about how you build relationships, your life will be transformed.” </p>
    <b style="font-family: 'Roboto Condensed', sans-serif; font-size:20px;">—Dr. Adam C. Bandelli</b>
    </div>
  </div>

  <div class="footerblock">

    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td style="width:140px;"> 
          <div class="flogo">
            <img
              class="Bandelli-Associates-Logo"
              src="{{asset('pdf/img/bandelli-associates-logo-1-1@2x.png')}}"
              alt="Bandelli-Associates-Logo 1"
            />
          </div> 
        </td>
        <td style="border-left:2px solid #ccc; padding-left: 20px;"> 
              <div class="textname">
          Bandelli Relational Intelligence Assessment
          </div> 
        </td>
        <td> &nbsp; </td>
        <td> <div class="pagenumber">3</div> </td>

      </tr>
  </table>

  </div>
</div>

<div style="page-break-after: always;"></div>
<!-- page 3 End -->



<!-- page 4 Start -->
<div class="pagestart page4">

  <h2 class="page_head">Dimensions</h2>

  <p style="font-size:16px; line-height:20px;">Through his research and practice over the last 20 years, Dr. Bandelli has identified the five essential skills of Relational Intelligence. Each of these five skills plays an important role in how a leader builds relationships with their people. Mastering these skills has been found to empower leaders to create positive, long-lasting impact on their teams and at their organizations.</p>



  <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td valign="top">
          <div class="page4_head" style="border-bottom:2px solid #FFCC01;">
            Establishing Rapport
          </div>
          <p style="font-size:16px; line-height:20px;">The ability to use <b>ENERGY</b> to create a positive initial connection when meeting someone for the first time. A person’s ability to effectively establish rapport with others often determines how well their relationships begin. Energy sits at the center of this skill — people who can consistently give positive energy are often more successful at easing into conversations and set great foundations for building sustainable, long-term relationships. Your energy speaks even before your words do.</p>
        </td>
        <td style="width:140px;" valign="top">
            <img style="max-width:100%; height:auto;"
              src="{{asset('pdf/img/EstablishingRapport.png')}}"
              alt="Bandelli-Associates-Logo 1"
            />
        </td>
      </tr>

      <tr>
        <td valign="top">
          <div class="page4_head" style="border-bottom:2px solid #7FB936;">
          Understanding Others
          </div>
          <p style="font-size:16px; line-height:20px;">The ability to be <b>INTENTIONAL</b> about putting in the time and effort needed to get to know someone on a deep level. This skill often determines the depth of a relationship. Distinguishing factors that determine how a leader gets to know their people include emotional intelligence, strong active listening skills, curiosity and inquisitiveness, and empathy toward others. Taking time to learn about others does not happen overnight. It is an ever-evolving process that takes place over time.</p>
        </td>
        <td style="width:140px;" valign="top">
            <img style="max-width:100%; height:auto;"
              src="{{asset('pdf/img/UnderstandingOthers.png')}}"
              alt="Bandelli-Associates-Logo 1"
            />
        </td>
      </tr>

      <tr>
        <td valign="top">
          <div class="page4_head" style="border-bottom:2px solid #A75FD3;">
          Embracing Individual Differences
          </div>
          <p style="font-size:16px; line-height:20px;">The ability to be <b>AUTHENTIC</b> in acknowledging and accepting that everyone comes from different backgrounds and experiences. Embracing Individual Differences means being receptive to people who think, act, and behave differently than you do. It is about creating cultures of inclusivity where your employees can bring their true authentic selves to work. This leads to diversity of thought, which helps companies drive innovation, creativity, and collective problem solving.</p>
        </td>
        <td style="width:140px;" valign="top">
            <img style="max-width:100%; height:auto;"
              src="{{asset('pdf/img/EstablishingDifferences.png')}}"
              alt="Bandelli-Associates-Logo 1"
            />
        </td>
      </tr>


      <tr>
        <td valign="top">
          <div class="page4_head" style="border-bottom:2px solid #2D63ED;">
          Developing Trust
          </div>
          <p style="font-size:16px; line-height:20px;">The ability to be <b>VULNERABLE</b> and risk being exposed to the actions and behaviors of others. Often, leaders observe and evaluate their teams to identify those who are “trustworthy,” while neglecting the fact that genuine trust must be given, not earned. Leaders who truly develop trust with others are willing to be vulnerable. When vulnerability is practiced consistently, it helps establish a psychologically safe environment for relationships to flourish and grow.</p>
        </td>
        <td style="width:140px;" valign="top">
            <img style="max-width:100%; height:auto;"
              src="{{asset('pdf/img/DevelopingTrust.png')}}"
              alt="Bandelli-Associates-Logo 1"
            />
        </td>
      </tr>

      <tr>
        <td valign="top">
          <div class="page4_head" style="border-bottom:2px solid #FF8E3A;">
          Cultivating Influence
          </div>
          <p style="font-size:16px; line-height:20px;">The ability to have a positive and meaningful <b>IMPACT</b> the lives of others. As the most powerful skill of Relational Intelligence, Cultivating Influence is about putting people and culture first before driving results. It’s about helping your employees become the best versions of themselves. Distinguishing factors that determine how a leader cultivates influence include serving others, providing consistent mentoring and coaching, and giving candid and honest feedback.</p>
        </td>
        <td style="width:140px;" valign="top">
            <img style="max-width:100%; height:auto;"
              src="{{asset('pdf/img/CultivatingInfluence.png')}}"
              alt="Bandelli-Associates-Logo 1"
            />
        </td>
      </tr>


  </table>

  <div class="footerblock">

    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td style="width:140px;"> 
          <div class="flogo">
            <img
              class="Bandelli-Associates-Logo"
              src="{{asset('pdf/img/bandelli-associates-logo-1-1@2x.png')}}"
              alt="Bandelli-Associates-Logo 1"
            />
          </div> 
        </td>
        <td style="border-left:2px solid #ccc; padding-left: 20px;"> 
              <div class="textname">
          Bandelli Relational Intelligence Assessment
          </div> 
        </td>
        <td> &nbsp; </td>
        <td> <div class="pagenumber">4</div> </td>

      </tr>
  </table>

  </div>
</div>

<div style="page-break-after: always;"></div>
<!-- page 4 End -->




<!-- page 5 Start -->

<div class="pagestart page5">
  <h2 class="page_head">Overview of Your Results</h2>

  <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td> <img style="max-width:100%; height:auto;"
              src="{{asset('pdf/img/P5OverviewResults.png')}}"
              alt="Bandelli-Associates-Logo 1"
            /> </td>
      </tr>
  </table>

  <p> &nbsp; </p>
  <div style="text-align:center;">
    <span style="width:20px; height:20px; background:#FFCC01; display:inline-block;">&nbsp;</span> <span style="width:20px; height:20px;"> Establishing Rapport </span> 
    <span style="width:20px; height:20px; background:#7FB936; display:inline-block; margin-left:10px;">&nbsp;</span> <span style="width:20px; height:20px; margin-right:10px;"> Understanding Others </span> 
    <span style="width:20px; height:20px; background:#A75FD3; display:inline-block;">&nbsp;</span> <span style="width:20px; height:20px;"> Embracing Individual Differences </span>
  </div>
  <div style="text-align:center; margin-top:10px;">
      <span style="width:20px; height:20px; background:#2D63ED; display:inline-block;">&nbsp;</span> <span style="width:20px; height:20px;"> Developing Trust </span> 
      <span style="width:20px; height:20px; background:#FF8E3A; display:inline-block; margin-left:10px;">&nbsp;</span> <span style="width:20px; height:20px;"> Cultivating Influence </span>
  </div>
  <p> &nbsp; </p>

  <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td style="width: 50%;"> 
          <div style="background:#F2F2F2; padding:21px 30px 31px 30px;">
          <p style="font-family: 'Roboto Condensed', sans-serif; font-size:20px; line-height:30px; margin-bottom:4px;">“The five essential skills of Relational Intelligence can be developed and improved over time. Our research has found that when leaders start to consistently practice these skills, they see dramatic improvements in the quality of their relationships with others.”</p>
    <b style="font-family: 'Roboto Condensed', sans-serif; font-size:20px;">—Dr. Adam C. Bandelli</b>
          </div>
        </td>
        <td style="padding-left:30px;">

          <div class="relating_box">
            <div class="top_box">
            <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
              <tr>
                <td>
                  <h3 class="headbox">
                  Relational <br>Intelligence
                  </h3>
                </td>
                <td style="text-align:right;">
                  <span style="font-size:13px;">Overall Score:</span><br>
                  <b class="ratbig" style="font-size:30px;">41%</b>
                </td>
              </tr>
            </table>
            </div>

            <div class="rat_lines">
              
              <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
                <tr>
                  <td>
                    <div class="text">Establishing Rapport</div>
                  </td>
                  <td>
                    <div class="number">50%</div>
                  </td>
                </tr>
              </table>
              
              <div style="background:#EAEBED; border-radius: 25px; height:3px; width:100%;">
                <div style="background:#FFCC01; border-radius: 25px; width:50%; height:3px;"></div>
              </div>
              
            </div>

            <div class="rat_lines">
              
              <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
                <tr>
                  <td>
                    <div class="text">Understanding Others</div>
                  </td>
                  <td>
                    <div class="number">30%</div>
                  </td>
                </tr>
              </table>
              
              <div style="background:#EAEBED; border-radius: 25px; height:3px; width:100%;">
                <div style="background:#7FB936; border-radius: 25px; width:30%; height:3px;"></div>
              </div>
              
            </div>


            <div class="rat_lines">
              
              <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
                <tr>
                  <td>
                    <div class="text">Embracing Individual Differences</div>
                  </td>
                  <td>
                    <div class="number">25%</div>
                  </td>
                </tr>
              </table>
              
              <div style="background:#EAEBED; border-radius: 25px; height:3px; width:100%;">
                <div style="background:#A75FD3; border-radius: 25px; width:25%; height:3px;"></div>
              </div>
              
            </div>

            <div class="rat_lines">
              
              <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
                <tr>
                  <td>
                    <div class="text">Developing Trust</div>
                  </td>
                  <td>
                    <div class="number">58%</div>
                  </td>
                </tr>
              </table>
              
              <div style="background:#EAEBED; border-radius: 25px; height:3px; width:100%;">
                <div style="background:#2D63ED; border-radius: 25px; width:58%; height:3px;"></div>
              </div>
              
            </div>

            <div class="rat_lines">
              
              <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
                <tr>
                  <td>
                    <div class="text">Cultivating Influence</div>
                  </td>
                  <td>
                    <div class="number">42%</div>
                  </td>
                </tr>
              </table>
              
              <div style="background:#EAEBED; border-radius: 25px; height:3px; width:100%;">
                <div style="background:#FF8E3A; border-radius: 25px; width:42%; height:3px;"></div>
              </div>
              
            </div>

          </div>

        </td>
      </tr>
  </table>
    
 



  <div class="footerblock">

    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td style="width:140px;"> 
          <div class="flogo">
            <img
              class="Bandelli-Associates-Logo"
              src="{{asset('pdf/img/bandelli-associates-logo-1-1@2x.png')}}"
              alt="Bandelli-Associates-Logo 1"
            />
          </div> 
        </td>
        <td style="border-left:2px solid #ccc; padding-left: 20px;"> 
              <div class="textname">
          Bandelli Relational Intelligence Assessment
          </div> 
        </td>
        <td> &nbsp; </td>
        <td> <div class="pagenumber">5</div> </td>

      </tr>
  </table>

  </div>
</div>

<div style="page-break-after: always;"></div>
<!-- page 5 End -->








<!-- page 6 Start -->
<div class="pagestart page6">

  <div class="subhead_top">Individual Scores & Implications</div>
  <h2 class="head_top">Establishing Rapport</h2>


  <div class="topgraybox">
    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
        <tr>
          <td style="width:50px;"> <img style="max-width:100%; height:auto;"
                src="{{asset('pdf/img/handIcon.png')}}"
                alt="Bandelli-Associates-Logo 1"
              /> </td>

          <td style="padding-left:14px;">
            <div style="color:#FFCC01; font-size:40px;"><b>80%</b></div>
            <div style="background:#EAEBED; border-radius: 25px; height:3px; width:100%;">
              <div style="background:#FFCC01; border-radius: 25px; width:80%; height:3px;"></div>
            </div>

            <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
                <tr>
                  <td style="width: 50%; font-size:11px; color:#3D3F42">Low</td>
                  <td style="width: 30%; font-size:11px; color:#3D3F42">Average</td>
                  <td style="text-align:right; font-size:11px; color:#3D3F42">High</td>
                </tr>
            </table>
          </td>
        </tr>
    </table>
  </div>

  <h3 class="report_head">Relational implications</h3>
  <p class="report_p">Leaders with similar scores tend to:</p>

  <ul>
      <li>
      Make a strong first impression when they first meet colleagues </li>
      <li>Understand that it matters how they say things, not just what they say </li>
      <li>Find common ground quickly with new coworkers</li>
      <li>Maintain good eye contact throughout conversations to build credibility and convey interest</li>
      <li>Use nonverbal cues and body language to show interest in what coworkers are communicating</li>
      <li>Use humor appropriately to engage others in a conversation
      </li>
  </ul>

  <div style="background:#FFCC01; border-radius: 25px; width:100%; height:2px; margin:30px 0;"></div>


  <h3 class="report_head">Leadership implications</h3>
  <p class="report_p">Compared to other leaders, your scores suggest that you understand how to build rapport with both internal and external stakeholders of your organization. The motto “you never get a second chance to make a good first impression,” resonates with you. You have an innate ability to pick the appropriate energy needed for a given audience and tailor your interpersonal style to the people with whom you are interacting. When communicating with new employees, you make them feel valued and appreciated. You ask questions to draw others into a conversation and connect on shared experiences or interests. From the first day someone joins your team, you look to create opportunities for enjoyable interactions and personal connections.</p>

  <div style="background:#FFCC01; border-radius: 25px; width:100%; height:2px; margin:30px 0;"></div>


  <h3 class="report_head">Work-Life Implications</h3>
  <p class="report_p">People with similar scores tend to:</p>
  <ul>
  <li>Excel in social interactions and project positive energy to others</li>
  <li>Be enthusiastic about connecting with new people</li>
  <li>Easily identify similarities and differences with others</li>
  <li>Strike a healthy balance between listening and talking when meeting others</li>
  <li>Be playful, fun, and engaging in social settings</li>
  </ul>





  <div class="footerblock">
    <div style="position:relative; width:100%;">  
      <div style="width:190px; position:absolute; top:-120px; right:-15px;"> 
        <img style="max-width:100%; height:auto;"
          src="{{asset('pdf/img/yellow_graphics.png')}}"
          alt="Bandelli-Associates-Logo 1"
        /> 
      </div>
    </div>

      <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
        <tr>
          <td style="width:140px;"> 
            <div class="flogo">
              <img
                class="Bandelli-Associates-Logo"
                src="{{asset('pdf/img/bandelli-associates-logo-1-1@2x.png')}}"
                alt="Bandelli-Associates-Logo 1"
              />
            </div> 
          </td>
          <td style="border-left:2px solid #ccc; padding-left: 20px;"> 
                <div class="textname">
            Bandelli Relational Intelligence Assessment
            </div> 
          </td>
          <td> &nbsp; </td>
          <td> <div class="pagenumber">6</div> </td>

        </tr>
    </table>

  </div>
</div>
<div style="page-break-after: always;"></div>
<!-- page 6 End -->






<!-- page 7 Start -->
<div class="pagestart page7">

  <div class="subhead_top">Individual Scores & Implications</div>
  <h2 class="head_top">Understanding Others</h2>


  <div class="topgraybox">
    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
        <tr>
          <td style="width:50px;"> <img style="max-width:100%; height:auto;"
                src="{{asset('pdf/img/ChatIcon.png')}}"
                alt="Bandelli-Associates-Logo 1"
              /> </td>

          <td style="padding-left:14px;">
            <div style="color:#7FB936; font-size:40px;"><b>75%</b></div>
            <div style="background:#EAEBED; border-radius: 25px; height:3px; width:100%;">
              <div style="background:#7FB936; border-radius: 25px; width:75%; height:3px;"></div>
            </div>

            <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
                <tr>
                  <td style="width: 50%; font-size:11px; color:#3D3F42">Low</td>
                  <td style="width: 30%; font-size:11px; color:#3D3F42">Average</td>
                  <td style="text-align:right; font-size:11px; color:#3D3F42">High</td>
                </tr>
            </table>
          </td>
        </tr>
    </table>
  </div>

  <h3 class="report_head">Relational implications</h3>
  <p class="report_p">Leaders with similar scores tend to:</p>

 
  <ul>
    <li>Have strong self-awareness and understand how their emotions impact coworkers</li>
    <li>Be easy to get along with and socially appropriate in different team settings</li>
    <li>Understand the emotions of colleagues and empathize with their experiences</li>
    <li>Be active listeners when communicating with people</li>
    <li>Show compassion toward the experiences, beliefs, and attitudes of colleagues</li>
    <li>Be curious and inquisitive when asking questions to get to know others</li>
  </ul>

  <div style="background:#7FB936; border-radius: 25px; width:100%; height:2px; margin:30px 0;"></div>


  <h3 class="report_head">Leadership implications</h3>
  <p class="report_p">Compared to other leaders, your scores suggest that you understand your own emotions, the emotions of others, and how to manage emotions effectively. You actively listen to your team members when they are speaking, which creates the psychological safety needed for your people to believe that their thoughts, opinions, and perspectives matter. You have a genuine desire to learn about the backgrounds, history, and lived experiences of your employees. This shows up in how you communicate with others and the frequency in which you do so. You are thoughtful and considerate towards people and your colleagues appreciate the positive impact of your actions on your organization’s culture.</p>

  <div style="background:#7FB936; border-radius: 25px; width:100%; height:2px; margin:30px 0;"></div>


  <h3 class="report_head">Work-Life Implications</h3>
  <p class="report_p">People with similar scores tend to:</p>
  <ul>
  <li>Know how to use their emotions to strengthen connections with loved ones</li>
  <li>Understand the importance of taking time to get to know new acquaintances</li>
  <li>Prioritize listening to friends when they have problems</li>
  <li>Have a good sense of how to put themselves in others’ shoes</li>
  <li>Create a comfortable and welcoming environment for friends to feel understood</li>
  </ul>





  <div class="footerblock">
    <div style="position:relative; width:100%;">  
      <div style="width:180px; position:absolute; top:-170px; right:-15px;"> 
        <img style="max-width:100%; height:auto;"
          src="{{asset('pdf/img/green_graphics.png')}}"
          alt="Bandelli-Associates-Logo 1"
        /> 
      </div>
    </div>

      <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
        <tr>
          <td style="width:140px;"> 
            <div class="flogo">
              <img
                class="Bandelli-Associates-Logo"
                src="{{asset('pdf/img/bandelli-associates-logo-1-1@2x.png')}}"
                alt="Bandelli-Associates-Logo 1"
              />
            </div> 
          </td>
          <td style="border-left:2px solid #ccc; padding-left: 20px;"> 
                <div class="textname">
            Bandelli Relational Intelligence Assessment
            </div> 
          </td>
          <td> &nbsp; </td>
          <td> <div class="pagenumber">7</div> </td>

        </tr>
    </table>

  </div>
</div>

<div style="page-break-after: always;"></div>
<!-- page 7 End -->





<!-- page 8 Start -->
<div class="pagestart page8">

  <div class="subhead_top">Individual Scores & Implications</div>
  <h2 class="head_top">Embracing Individual Differences</h2>


  <div class="topgraybox">
    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
        <tr>
          <td style="width:50px;"> <img style="max-width:100%; height:auto;"
                src="{{asset('pdf/img/DiffIcon.png')}}"
                alt="Bandelli-Associates-Logo 1"
              /> </td>

          <td style="padding-left:14px;">
            <div style="color:#6700AD; font-size:40px;"><b>95%</b></div>
            <div style="background:#EAEBED; border-radius: 25px; height:3px; width:100%;">
              <div style="background:#6700AD; border-radius: 25px; width:95%; height:3px;"></div>
            </div>

            <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
                <tr>
                  <td style="width: 50%; font-size:11px; color:#3D3F42">Low</td>
                  <td style="width: 30%; font-size:11px; color:#3D3F42">Average</td>
                  <td style="text-align:right; font-size:11px; color:#3D3F42">High</td>
                </tr>
            </table>
          </td>
        </tr>
    </table>
  </div>

  <h3 class="report_head">Relational implications</h3>
  <p class="report_p">Leaders with similar scores tend to:</p>

 
  <ul>
    <li>Have a genuine and authentic communication style when interacting with coworkers</li>
    <li>React favorably to employees who think, act, and behave differently than they do</li>
    <li>Build talented diverse teams with people from various backgrounds and experiences</li>
    <li>Create inclusive cultures where all employees can bring their true selves to work</li>
    <li>Want people to have a positive employee experience while ensuring everyone feels respected and valued</li>
    <li>Believe that a team made up of different types of people leads to diversity of thought</li>
  </ul>


  <div style="background:#6700AD; border-radius: 25px; width:100%; height:2px; margin:30px 0;"></div>


  <h3 class="report_head">Leadership implications</h3>
  <p class="report_p">Compared to other leaders, your scores suggest that you consistently model authenticity for your people and teams. This creates the conditions through which your employees feel comfortable being themselves at work. You regularly maintain a positive attitude, remain patient when challenges surface, and handle adversity with optimism and hope. You are thoughtful and considerate towards people, and your colleagues appreciate the positive impact your actions have on your organization’s culture. You actively encourage people to bring creative and innovative ideas to problems facing the business. This inspires others to think outside the box and work together to find collaborative solutions. </p>

  <div style="background:#6700AD; border-radius: 25px; width:100%; height:2px; margin:30px 0;"></div>


  <h3 class="report_head">Work-Life Implications</h3>
  <p class="report_p">People with similar scores tend to:</p>
  <ul>
  <li>Find themselves surrounded by a diverse group of friends often</li>
  <li>Enjoy learning about the cultures and customs of different types of people</li>
  <li>Be comfortable being themselves around their family and circle of friends</li>
  <li>Take initiative to try new hobbies and activities with others</li>
  <li>Challenge their friends and loved ones to be consistent life-long learners</li>
  </ul>





  <div class="footerblock">
    <div style="position:relative; width:100%;">  
      <div style="width:130px; position:absolute; top:-144px; right:-15px;"> 
        <img style="max-width:100%; height:auto;"
          src="{{asset('pdf/img/purple_graphics.png')}}"
          alt="Bandelli-Associates-Logo 1"
        /> 
      </div>
    </div>

    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td style="width:140px;"> 
          <div class="flogo">
            <img
              class="Bandelli-Associates-Logo"
              src="{{asset('pdf/img/bandelli-associates-logo-1-1@2x.png')}}"
              alt="Bandelli-Associates-Logo 1"
            />
          </div> 
        </td>
        <td style="border-left:2px solid #ccc; padding-left: 20px;"> 
              <div class="textname">
          Bandelli Relational Intelligence Assessment
          </div> 
        </td>
        <td> &nbsp; </td>
        <td> <div class="pagenumber">8</div> </td>

      </tr>
    </table>

  </div>
</div>

<div style="page-break-after: always;"></div>
<!-- page 8 End -->



<!-- page 9 Start -->
<div class="pagestart page9">

  <div class="subhead_top">Individual Scores & Implications</div>
  <h2 class="head_top">Developing Trust</h2>


  <div class="topgraybox">
    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
        <tr>
          <td style="width:50px;"> <img style="max-width:100%; height:auto;"
                src="{{asset('pdf/img/DevelIcon.png')}}"
                alt="DevelIcon"
              /> </td>

          <td style="padding-left:14px;">
            <div style="color:#2D63ED; font-size:40px;"><b>70%</b></div>
            <div style="background:#EAEBED; border-radius: 25px; height:3px; width:100%;">
              <div style="background:#2D63ED; border-radius: 25px; width:70%; height:3px;"></div>
            </div>

            <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
                <tr>
                  <td style="width: 50%; font-size:11px; color:#3D3F42">Low</td>
                  <td style="width: 30%; font-size:11px; color:#3D3F42">Average</td>
                  <td style="text-align:right; font-size:11px; color:#3D3F42">High</td>
                </tr>
            </table>
          </td>
        </tr>
    </table>
  </div>

  <h3 class="report_head">Relational implications</h3>
  <p class="report_p">Leaders with similar scores tend to:</p>

 
  <ul>
    <li>Have a deep understanding of how their values, strengths, and blind spots impact the ways they work with colleagues</li>
    <li>Be comfortable sharing the lessons they have learned along their career journey openly and with vulnerability</li>
    <li>Honor their commitments to coworkers at all levels of the organization</li>
    <li>Have strong morals and operate with a high level of integrity</li>
    <li>Be consistently intentional about investing in their relationships with others</li>
    <li>Believe that building trust with their employees leads to higher levels of communication, collaboration, and teamwork</li>
  </ul>

  <div style="background:#2D63ED; border-radius: 25px; width:100%; height:2px; margin:30px 0;"></div>


  <h3 class="report_head">Leadership implications</h3>
  <p class="report_p">Compared to other leaders, your scores suggest that you are honest with yourself about your strengths and development areas and regularly take action to make improvements. Your employees believe that you have their best interests at heart, and this cultivates their loyalty and commitment to the team. You are consistent in your words and actions on a daily basis regardless of what’s going on around you. This inspires others to work hard and strive to exceed performance expectations. The quality and depth of your relationships at work is a testament to your intentional generosity toward others.</p>

  <div style="background:#2D63ED; border-radius: 25px; width:100%; height:2px; margin:30px 0;"></div>


  <h3 class="report_head">Work-Life Implications</h3>
  <p class="report_p">People with similar scores tend to:</p>
  <ul>
  <li>Have the courage to be vulnerable and share their struggles with friends or family</li>
  <li>Be consistent in how they show up for people in their social circles</li>
  <li>Have friends who often confide in them during difficult times</li>
  <li>TakdfjeBe comfortable having difficult conversations with friends when needed rs</li>
  <li>Take ownership and accountability when they let someone close to them down</li>
  </ul>

  <div class="footerblock">
    <div style="position:relative; width:100%;">  
      <div style="width:174px; position:absolute; top:-149px; right:-22px;"> 
        <img style="max-width:100%; height:auto;"
          src="{{asset('pdf/img/Blue_graphics.png')}}"
          alt="Bandelli-Associates-Logo 1"
        /> 
      </div>
    </div>

    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td style="width:140px;"> 
          <div class="flogo">
            <img
              class="Bandelli-Associates-Logo"
              src="{{asset('pdf/img/bandelli-associates-logo-1-1@2x.png')}}"
              alt="Bandelli-Associates-Logo 1"
            />
          </div> 
        </td>
        <td style="border-left:2px solid #ccc; padding-left: 20px;"> 
              <div class="textname">
          Bandelli Relational Intelligence Assessment
          </div> 
        </td>
        <td> &nbsp; </td>
        <td> <div class="pagenumber">9</div> </td>

      </tr>
    </table>

  </div>

</div>

<div style="page-break-after: always;"></div>
<!-- page 9 End -->




<!-- page 10 Start -->
<div class="pagestart page9">

  <div class="subhead_top">Individual Scores & Implications</div>
  <h2 class="head_top">Cultivating Influence</h2>


  <div class="topgraybox">
    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
        <tr>
          <td style="width:50px;"> <img style="max-width:100%; height:auto;"
                src="{{asset('pdf/img/CulIcon.png')}}"
                alt="DevelIcon"
              /> </td>

          <td style="padding-left:14px;">
            <div style="color:#FF8E3A; font-size:40px;"><b>80%</b></div>
            <div style="background:#EAEBED; border-radius: 25px; height:3px; width:100%;">
              <div style="background:#FF8E3A; border-radius: 25px; width:80%; height:3px;"></div>
            </div>

            <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
                <tr>
                  <td style="width: 50%; font-size:11px; color:#3D3F42">Low</td>
                  <td style="width: 30%; font-size:11px; color:#3D3F42">Average</td>
                  <td style="text-align:right; font-size:11px; color:#3D3F42">High</td>
                </tr>
            </table>
          </td>
        </tr>
    </table>
  </div>

  <h3 class="report_head">Relational implications</h3>
  <p class="report_p">Leaders with similar scores tend to:</p>

 
  <ul>
    <li>Have a strong desire to see their employees become the best versions of themselves</li>
    <li>Intentionally take time to mentor and coach others</li>
    <li>Be proactive in providing consistent feedback to team members</li>
    <li>Adjust their communication style to meet the learning needs of different stakeholders</li>
    <li>Have a genuine desire to see their people develop and grow</li>
    <li>Believe it is their responsibility to be good stewards of the talent in their organizations</li>
  </ul>


  <div style="background:#FF8E3A; border-radius: 25px; width:100%; height:2px; margin:30px 0;"></div>


  <h3 class="report_head">Leadership implications</h3>
  <p class="report_p">Compared to other leaders, your scores suggest that you put people and culture first before driving execution and performance. You create a climate on your team where people actively solicit regular feedback from each other. You have a passion for developing talent and look for opportunities to give your employees roles of increased scale, scope, and responsibility. You do this by recognizing that your team members learn differently from one another, and you adapt and adjust your style to best fit their individual needs. You are open to feedback from colleagues, and this sets the tone for learning in your organization.</p>

  <div style="background:#FF8E3A; border-radius: 25px; width:100%; height:2px; margin:30px 0;"></div>


  <h3 class="report_head">Work-Life Implications</h3>
  <p class="report_p">People with similar scores tend to:</p>
  <ul>
  <li>Want to help friends and family members learn new skills and grow</li>
  <li>Put the needs of those they care about ahead of their own needs</li>
  <li>Give honest candid feedback to friends when they need it</li>
  <li>Look for ways to help loved ones see their full potential</li>
  <li>Value relationships with friends who aspire for continuous development</li>
  </ul>

  





  <div class="footerblock">
    <div style="position:relative; width:100%;">  
      <div style="width:174px; position:absolute; top:-110px; right:-15px;"> 
        <img style="max-width:100%; height:auto;"
          src="{{asset('pdf/img/orange_graphics.png')}}"
          alt="Bandelli-Associates-Logo 1"
        /> 
      </div>
    </div>

    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td style="width:140px;"> 
          <div class="flogo">
            <img
              class="Bandelli-Associates-Logo"
              src="{{asset('pdf/img/bandelli-associates-logo-1-1@2x.png')}}"
              alt="Bandelli-Associates-Logo 1"
            />
          </div> 
        </td>
        <td style="border-left:2px solid #ccc; padding-left: 20px;"> 
              <div class="textname">
          Bandelli Relational Intelligence Assessment
          </div> 
        </td>
        <td> &nbsp; </td>
        <td> <div class="pagenumber">10</div> </td>

      </tr>
    </table>

  </div>

</div>

<div style="page-break-after: always;"></div>
<!-- page 10 End -->




<!-- page 11 Start -->
<div class="pagestart page11">

  <h2 class="page_head">Derailers Overview</h2>



  <p>Building relationships is a process that evolves over time. When leaders begin to develop relationships with employees, they must be mindful of relational derailers that can prevent them from creating deep connections with others. Understanding and avoiding these blind spots enables you to be successful when partnering with your coworkers. </p>

  <p>On the next page, you will find your scores for each of the derailers listed below. Scores between the 80th and 100th percentile are in the High Risk Zone, scores between the 50th and 79th percentiles are in the Moderate Risk Zone, and scores between the 0 to 49th percentile are in the No Risk Zone. </p>

  <p><b style="color:#DB0707">Lacking Self-Awareness</b>
  The inability to understand how one’s actions or behaviors can have a negative impact on others. If an individual does not know how they are wired as a leader, they will not be able to connect with others and form solid, lasting relationships.</p>

  <p><b style="color:#DB0707">Lacking Social Awareness</b>
  The inability to understand how to read social cues and subtle nuances when communicating with others. If an individual cannot read a room or process social cues in the moment, they will not be able to effectively work with colleagues.</p>

  <p><b style="color:#DB0707">Self-Serving</b>
  The inability to show interest in the objectives of others when they do not align with one’s personal agenda. If an individual is manipulative and does not consider other peoples’ needs, interests, or perspectives, they might achieve short-term priorities, but will not be successful in the long run.</p>

  <p><b style="color:#DB0707">Breaking Trust</b>
  The inability to be open, honest, and transparent with others. If an individual violates their coworkers’ trust — whether it’s not honoring commitments, being deceitful and lying, or betraying someone’s trust — relationships end quickly. </p>

  <p><b style="color:#DB0707">Poor Management of Emotions</b>
  The inability to manage emotions when interacting with others. If an individual has difficulty managing their frustration, anger, or resentment, their actions can intimidate others and prevent people from wanting to work with them. </p>


  <div class="footerblock">

    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td style="width:140px;"> 
          <div class="flogo">
            <img
              class="Bandelli-Associates-Logo"
              src="{{asset('pdf/img/bandelli-associates-logo-1-1@2x.png')}}"
              alt="Bandelli-Associates-Logo 1"
            />
          </div> 
        </td>
        <td style="border-left:2px solid #ccc; padding-left: 20px;"> 
              <div class="textname">
          Bandelli Relational Intelligence Assessment
          </div> 
        </td>
        <td> &nbsp; </td>
        <td> <div class="pagenumber">11</div> </td>

      </tr>
  </table>

  </div>
</div>

<div style="page-break-after: always;"></div>
<!-- page 11 End -->






<!-- page 12 Start -->
<div class="pagestart page12">

  <h2 class="page_head" style="margin-bottom:20px;">Relational Derailer Dimension Scores</h2>

  <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td>
          <div>
            <div style="font-family: 'Roboto Condensed', sans-serif; font-size:24px; color:#3D3F42; display:inline-block;">Lacking Self-Awareness</div> 
            <div style="font-family: 'Roboto Condensed', sans-serif; font-size:24px; color:#DB0707; display:inline-block;">(High Risk)</div>
          </div>
          <div style="font-size:16px; padding-bottom:5px;">People with similar scores tend to:</div>
        </td>
        <td style="text-align:right; width:270px;">
          <div class="bar" style="width:270px;">
          <img style="width:270px; height:5px;"
              src="{{asset('pdf/img/Bar.png')}}"
              alt="Bar"
            />
          </div>
        </td>
      </tr>
  </table>
  <div class="left_right_table">
    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
        <tr>
          <th>
          Relational Implication: 
          </th>
          <td >
          Overestimate their skills and abilities, which prevents them from seeking the support of colleagues.
          </td>
        </tr>
        <tr>
          <th>
          Leadership Implication: 
          </th>
          <td >
          Assume they have all the right answers and rarely seek  input from their team members.
          </td>
        </tr>
        <tr>
          <th>
          Organizational Culture Implication:
          </th>
          <td >
          Be unaware of the impact they have on others, which can create a culture of miscommunication, lack of alignment, and poor engagement.
          </td>
        </tr>
    </table>
  </div>

  <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td>
          <div style="width:400px;">
            <span style="font-family: 'Roboto Condensed', sans-serif; font-size:24px; color:#3D3F42;">Lacking Social Awareness</span> 
            <span style="font-family: 'Roboto Condensed', sans-serif; font-size:24px; color:#DB0707;">(High Risk)</span>
          </div>
          <div style="font-size:16px; padding-bottom:5px;">People with similar scores tend to:</div>
        </td>
        <td style="text-align:right; width:270px;">
          <div class="bar" style="width:270px;">
          <img style="width:270px; height:5px;"
              src="{{asset('pdf/img/Bar.png')}}"
              alt="Bar"
            />
          </div>
        </td>
      </tr>
  </table>
  <div class="left_right_table">
    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
        <tr>
          <th>
          Relational Implication: 
          </th>
          <td >
          Talk more than they listen and seem to not take the viewpoints of others seriously.
          </td>
        </tr>
        <tr>
          <th>
          Leadership Implication: 
          </th>
          <td >
          Assume employees agree with their expectations without soliciting input or perspectives from team members.
          </td>
        </tr>
        <tr>
          <th>
          Organizational Culture Implication:
          </th>
          <td >
          Be unconcerned with the thoughts and feelings of colleagues, which can affect their ability to build cross-functional alliances.
          </td>
        </tr>
    </table>
  </div>

  <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td>
        <div style="width:400px;">
            <span style="font-family: 'Roboto Condensed', sans-serif; font-size:24px; color:#3D3F42;">Self Serving</span> 
            <span style="font-family: 'Roboto Condensed', sans-serif; font-size:24px; color:#DB0707;">(High Risk)</span>
          </div>
          <div style="font-size:16px; padding-bottom:5px;">People with similar scores tend to:</div>
        </td>
        <td style="text-align:right; width:270px;">
          <div class="bar" style="width:270px;">
          <img style="width:270px; height:5px;"
              src="{{asset('pdf/img/Bar.png')}}"
              alt="Bar"
            />
          </div>
        </td>
      </tr>
  </table>
  <div class="left_right_table">
    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
        <tr>
          <th>
          Relational Implication: 
          </th>
          <td >
          Publicly promote their personal agendas without taking into consideration the goals, priorities, or objectives of others.
          </td>
        </tr>
        <tr>
          <th>
          Leadership Implication: 
          </th>
          <td >
          Use employees as “a means to an end” in the pursuit of their personal agendas.
          </td>
        </tr>
        <tr>
          <th>
          Organizational Culture Implication:
          </th>
          <td >
          Actively discourage their employees from participating in projects or initiatives that do not directly benefit their priorities.
          </td>
        </tr>
    </table>
  </div>

  <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td>
        <div style="width:400px;">
            <span style="font-family: 'Roboto Condensed', sans-serif; font-size:24px; color:#3D3F42;">Breaking Trust</span> 
            <span style="font-family: 'Roboto Condensed', sans-serif; font-size:24px; color:#DB0707;">(High Risk)</span>
          </div>
          <div style="font-size:16px; padding-bottom:5px;">People with similar scores tend to:</div>
        </td>
        <td style="text-align:right; width:270px;">
          <div class="bar" style="width:270px;">
          <img style="width:270px; height:5px;"
              src="{{asset('pdf/img/Bar.png')}}"
              alt="Bar"
            />
          </div>
        </td>
      </tr>
  </table>
  <div class="left_right_table">
    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
        <tr>
          <th>
          Relational Implication: 
          </th>
          <td >
          Sometimes test limits and boundaries of their commitments to others.
          </td>
        </tr>
        <tr>
          <th>
          Leadership Implication: 
          </th>
          <td >
          Be spontaneous and impulsive, which can cause them to forget about projects they have assigned to their team members.
          </td>
        </tr>
        <tr>
          <th>
          Organizational Culture Implication:
          </th>
          <td >
          Procrastinate or avoid a person or task when they disagree with a course of action that has been set by other leaders in the organization.
          </td>
        </tr>
    </table>
  </div>


  <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td>
          <div style="width:500px;">
            <span style="font-family: 'Roboto Condensed', sans-serif; font-size:24px; color:#3D3F42;">Poor Management of Emotions</span> 
            <span style="font-family: 'Roboto Condensed', sans-serif; font-size:24px; color:#DB0707;">(High Risk)</span>
          </div>
          <div style="font-size:16px; padding-bottom:5px;">People with similar scores tend to:</div>
        </td>
        <td style="text-align:right; width:270px;">
          <div class="bar" style="width:270px;">
          <img style="width:270px; height:5px;"
              src="{{asset('pdf/img/Bar.png')}}"
              alt="Bar"
            />
          </div>
        </td>
      </tr>
  </table>
  <div class="left_right_table" style="border:0;">
    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
        <tr>
          <th>
          Relational Implication: 
          </th>
          <td >
          Be easily offended, argumentative, and retaliate when they feel wronged.
          </td>
        </tr>
        <tr>
          <th>
          Leadership Implication: 
          </th>
          <td >
          Have a tendency toward emotional displays in front of team members, which can frighten or intimidate their people.
          </td>
        </tr>
        <tr>
          <th>
          Organizational Culture Implication:
          </th>
          <td >
          Become visibly upset with unexpected problems to enterprise-wide initiatives and may say things to colleagues they regret later.
          </td>
        </tr>
    </table>
  </div>
  


  <div class="footerblock">

    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td style="width:140px;"> 
          <div class="flogo">
            <img
              class="Bandelli-Associates-Logo"
              src="{{asset('pdf/img/bandelli-associates-logo-1-1@2x.png')}}"
              alt="Bandelli-Associates-Logo 1"
            />
          </div> 
        </td>
        <td style="border-left:2px solid #ccc; padding-left: 20px;"> 
              <div class="textname">
          Bandelli Relational Intelligence Assessment
          </div> 
        </td>
        <td> &nbsp; </td>
        <td> <div class="pagenumber">12</div> </td>

      </tr>
  </table>

  </div>
</div>

<div style="page-break-after: always;"></div>

<!-- page 12 End -->



<!-- page 13 Start -->
<div class="pagestart page13">

  <h2 class="page_head">Recommendations</h2>

  <p>Now that you have reviewed your results, it is important to think about how you want to further develop your Relational Intelligence. The following recommendations should be viewed as <b>thought starters</b> as you begin working with your executive coach or leadership advisor to build your personal development plan. You may practice some of these behaviors already, so use these recommendations as guidelines for whichever skill(s) you want to improve. </p>


  <div class="page4_head" style="border-bottom:2px solid #FFCC01; font-size:24px;">
  Establishing Rapport
  </div>
  <ul>
  <li>Look for ways to make a strong first impression on others. This can include how you dress or your appearance, what you say to others when you first meet them, and how actively you engage in the conversation. </li>
  <li>Maintain good eye contact when speaking and listening to others. Use eye contact to build credibility, convey openness, and share your point of view.</li>
  <li>Focus on demonstrating the right nonverbal communication and body language to show people you are engaged in the conversation.</li>
  <li>Identify areas of common ground with others so they feel heard, valued, and appreciated. Look for ways to connect on shared experiences and interests.</li>
  <li>Give genuine and sincere compliments to build connections with others. Specific compliments can draw people into conversations.</li>
  </ul>

  <p> &nbsp; </p>

  <div class="page4_head" style="border-bottom:2px solid #7FB936; font-size:24px;">
  Understanding Others
  </div>
  <ul>
  <li>Look for opportunities to cultivate and use your emotional intelligence. Develop a better understanding of your emotions, how to read the emotions of others, and how to effectively manage emotions when conflicts arise so you can connect with others on a deeper level.</li>
  <li>Use active listening skills and curiosity. Remember to paraphrase, reflect on what others are saying, and don’t interrupt them.</li>
  <li>Try to display a genuine interest in what your coworkers say. People can sense when you are “going through the motions” rather than actively listening to them.</li>
  <li>Be willing to put yourself in other peoples’ shoes as they share more about themselves. This will enable you to develop a deeper connection with them.</li>
  <li>Share information about your leadership journey and the lessons you have learned along the way. Understanding others isn’t just learning about people, it’s about sharing your experiences as well.</li>
  </ul>


  <div class="footerblock">

    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td style="width:140px;"> 
          <div class="flogo">
            <img
              class="Bandelli-Associates-Logo"
              src="{{asset('pdf/img/bandelli-associates-logo-1-1@2x.png')}}"
              alt="Bandelli-Associates-Logo 1"
            />
          </div> 
        </td>
        <td style="border-left:2px solid #ccc; padding-left: 20px;"> 
              <div class="textname">
          Bandelli Relational Intelligence Assessment
          </div> 
        </td>
        <td> &nbsp; </td>
        <td> <div class="pagenumber">13</div> </td>

      </tr>
  </table>

  </div>
</div>

<div style="page-break-after: always;"></div>
<!-- page 13 End -->



<!-- page 14 Start -->
<div class="pagestart page13">

  <h2 class="page_head">Recommendations <span style="font-size: 24px; color: #3D3F42; font-family: 'Roboto Condensed', sans-serif;">(Continued)</span></h2>

  <div class="page4_head" style="border-bottom:2px solid #A75FD3; font-size:24px;">
    Embracing Individual Differences
  </div>
  <ul>
  <li>Model authenticity for your people. This will break down traditional workplace barriers and create a healthier and more empathic company culture.</li>
  <li>Create channels of consistent communication with coworkers — the more you communicate with colleagues, the greater your opportunity to strengthen relationships over time.</li>
  <li>Actively encourage your employees to take the initiative and learn from one another. This will create a learning culture in your organization over time. </li>
  <li>Look for ways to develop a common language around what “inclusivity” means for your organization. This helps create the conditions in which employees can be their true selves at work. </li>
  <li>Pursue diversity of thought with your people and teams. This will help your people develop innovative and creative ideas to grow your business.</li>
  </ul>

  <p> &nbsp; </p>

  <div class="page4_head" style="border-bottom:2px solid #7FB936; font-size:24px;">
  Developing Trust
  </div>
  <ul>
  <li>Take time to learn about yourself. Get clear on your values, the things that you do well, and where you might have blind spots or derailers when you are not at your best.</li>
  <li>As a leader, you must be comfortable being vulnerable with your employees when it is appropriate to do so. This will encourage team members to ask for help when they run into challenges.</li>
  <li>Be committed to your people and consistent in how you show up as a leader. Employees pay more attention to what you do, not what you say.</li>
  <li>Be honest, open, and transparent with your coworkers. A leader with high integrity will always gain a following from the people in their organizations.</li>
  <li>Live with a “deposit mentality.” This means being intentionally generous with your time and making sacrifices for your people to continuously invest in developing your relationships.</li>
  </ul>

  <p> &nbsp; </p>

  <div class="page4_head" style="border-bottom:2px solid #7FB936; font-size:24px;">
  Cultivating Influence
  </div>
  <ul>
  <li>Make sure that you are accessible to all your employees. Do not “play favorites” with your top performers or avoid those who may be struggling at work. Everyone on your team should be able to come to you for guidance and support.  </li>
  <li>Actively look for ways to consistently mentor and coach your people. Make a habit of providing regular developmental feedback so your employees know you are invested in their growth.</li>
  <li>Let your people know you understand that mistakes happen, lessons should be learned along the way, and you will support them through the tough times. </li>
  <li>When providing feedback to your people, make sure to listen to them as well. Often the best developmental conversations happen when your people feel heard and understood.</li>
  <li>Support the careers of your coworkers. Involve others in projects, delegate tasks when possible, and look for opportunities to partner with colleagues on important initiatives.</li>
  </ul>


  <div class="footerblock">

    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td style="width:140px;"> 
          <div class="flogo">
            <img
              class="Bandelli-Associates-Logo"
              src="{{asset('pdf/img/bandelli-associates-logo-1-1@2x.png')}}"
              alt="Bandelli-Associates-Logo 1"
            />
          </div> 
        </td>
        <td style="border-left:2px solid #ccc; padding-left: 20px;"> 
              <div class="textname">
          Bandelli Relational Intelligence Assessment
          </div> 
        </td>
        <td> &nbsp; </td>
        <td> <div class="pagenumber">14</div> </td>

      </tr>
  </table>

  </div>
</div>

<div style="page-break-after: always;"></div>
<!-- page 14 End -->




<!-- page 15 Start -->
<div class="pagestart page13">

  <h2 class="page_head">Reflection</h2>

  <p>Take some time and write down any thoughts about your assessment and develop goals to improve your Relational Intelligence. Write everything that comes to mind and be as specific as possible.</p>

  

  <div class="page4_head" style="border-bottom:1px solid #cccccc; height:40px"></div>

  <div class="page4_head" style="border-bottom:1px solid #cccccc; height:40px"></div>

  <div class="page4_head" style="border-bottom:1px solid #cccccc; height:40px"></div>

  <div class="page4_head" style="border-bottom:1px solid #cccccc; height:40px"></div>

  <div class="page4_head" style="border-bottom:1px solid #cccccc; height:40px"></div>

  <div class="page4_head" style="border-bottom:1px solid #cccccc; height:40px"></div>

  <div class="page4_head" style="border-bottom:1px solid #cccccc; height:40px"></div>

  <div class="page4_head" style="border-bottom:1px solid #cccccc; height:40px"></div>

  <div class="page4_head" style="border-bottom:1px solid #cccccc; height:40px"></div>

  <div class="page4_head" style="border-bottom:1px solid #cccccc; height:40px"></div>

  <div class="page4_head" style="border-bottom:1px solid #cccccc; height:40px"></div>

  <div class="page4_head" style="border-bottom:1px solid #cccccc; height:40px"></div>

  <div class="page4_head" style="border-bottom:1px solid #cccccc; height:40px"></div>

  <div class="page4_head" style="border-bottom:1px solid #cccccc; height:40px"></div>

  <div class="page4_head" style="border-bottom:1px solid #cccccc; height:40px"></div>

  <div class="page4_head" style="border-bottom:1px solid #cccccc; height:40px"></div>

  <div class="page4_head" style="border-bottom:1px solid #cccccc; height:40px"></div>

  <div class="page4_head" style="border-bottom:1px solid #cccccc; height:40px"></div>
  
  <p> &nbsp; </p>

  


  <div class="footerblock">

    <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
      <tr>
        <td style="width:140px;"> 
          <div class="flogo">
            <img
              class="Bandelli-Associates-Logo"
              src="{{asset('pdf/img/bandelli-associates-logo-1-1@2x.png')}}"
              alt="Bandelli-Associates-Logo 1"
            />
          </div> 
        </td>
        <td style="border-left:2px solid #ccc; padding-left: 20px;"> 
              <div class="textname">
          Bandelli Relational Intelligence Assessment
          </div> 
        </td>
        <td> &nbsp; </td>
        <td> <div class="pagenumber">15</div> </td>

      </tr>
  </table>

  </div>
</div>

<div style="page-break-after: always;"></div>
<!-- page 15 End -->


  </body>
</html>