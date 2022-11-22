<!DOCTYPE html>
<html>

<head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');

    @import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;800;900&display=swap');

    * {
      margin: 0;
      padding: 0;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      vertical-align: middle;
      font-family: 'Work Sans', sans-serif, Arial;
    }

    h1,
    h2,
    h3 {
      font-family: 'Roboto Condensed', sans-serif;
    }

    p {
      font-family: 'Work Sans', sans-serif, Arial;
      font-size: 13px;
      line-height: 18px;
    }

    .Bandelli-Associates-Logo {
      width: 473px;
      height: 141px;
    }

    .page1-intro-red {
      font-family: 'Roboto Condensed', sans-serif;
      font-style: normal;
      font-weight: 700;
      font-size: 94px;
      line-height: 84px;
      color: #DB0707;
      margin-top: 100px;
    }

    .page1-subhead {
      font-family: 'Roboto Condensed', sans-serif;
      font-style: normal;
      font-weight: 400;
      font-size: 18px;
      line-height: 20px;
      color: #000000;
      letter-spacing: 0.09em;
      text-transform: uppercase;
      margin-top: 20px;

      margin-bottom: 30px;
    }


    .page1_box_yellow {
      width: 50px;
      height: 48px;
      background: linear-gradient(69.06deg, #FFE580 18.25%, #FFCC01 90.57%);
      border-radius: 10.9413px;
      background: #FFCC01;
      flex: none;
      order: 0;
      flex-grow: 0;
    }

    .page1_box_green {
      width: 50px;
      height: 48px;
      background: linear-gradient(90deg, #A9EB57 0%, #7FB936 100%);
      border-radius: 10.9413px;
      background: #7FB936;
      flex: none;
      order: 0;
      flex-grow: 0;
    }

    .page1_box_purple {
      width: 50px;
      height: 48px;
      background: linear-gradient(252.33deg, #6700AD 12.08%, #A75FD3 87.92%);
      border-radius: 10.9413px;
      background: #A75FD3;
      flex: none;
      order: 0;
      flex-grow: 0;
    }

    .page1_box_blue {
      width: 50px;
      height: 48px;
      background: linear-gradient(97.5deg, #B4C9FF 5.24%, #2D63ED 93.61%);
      border-radius: 10.9413px;
      background: #2D63ED;
      flex: none;
      order: 0;
      flex-grow: 0;
    }

    .page1_box_orange {
      width: 50px;
      height: 48px;
      background: linear-gradient(108.83deg, #FFB782 22.51%, #FF8E3A 97.08%);
      border-radius: 10.9413px;
      background: #FF8E3A;
      flex: none;
      order: 0;
      flex-grow: 0;
    }

    th,
    td {
      text-align: left;
      padding: 4px 4px 4px 0;
    }

    .page1_table {
      font-family: 'Roboto Condensed', sans-serif;
    }

    .page1_copyrite {
      font-size: 12px;
      font-family: 'Roboto Condensed', sans-serif;
      color: #000000;
    }

    .page_head {
      font-family: 'Roboto Condensed', sans-serif;
      font-size: 40px;
      padding: 0;
      padding-bottom: 10px;
      margin: 0 0 30px 0;
      border-bottom: 2px solid red;
    }
  </style>

</head>

<body style="margin: 0; background: #ffffff">
  <input type="hidden" id="anPageName" name="page" value="p1-title-page" />

  <!-- page 1 start -->
  <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
    <tr>
      <td> &nbsp; </td>
      <td class="Bandelli-Associates-Logo">
        <img class="Bandelli-Associates-Logo" src="{{asset('pdf/img/bandelli-associates-logo-1-1@2x.png')}}" alt="Bandelli-Associates-Logo 1" />
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


  <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top" cellpadding="0" cellspacing="0">
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
      <th style="width: 250px;">
        Report for
      </th>
      <th style="width: 250px;">
        ID
      </th>
      <th>
        Date taken
      </th>
    </tr>
    <tr>
      <td style="width: 250px;">
        {{$full_name}}
      </td>
      <td style="width: 250px;">
       {{$survey_id}}
      </td>
      <td>
      {{$date}}
      </td>
    </tr>
  </table>


  <div style="height:5px; margin-top:160px;"> &nbsp; </div>

  <table style="width: 100%; margin: 0 auto; padding: 0; vertical-align: top; font-family: 'Roboto Condensed', sans-serif;" cellpadding="0" cellspacing="0">

    <tr>
      <td class="page1_copyrite">
        © 2022 Bandelli & Associates. All rights reserved.
      </td>

    </tr>
  </table>

  <div style="page-break-after: always;"></div>

  <!-- page 1 End -->




  <!-- page 2 Start -->

  <h2 class="page_head">Introduction</h2>

  <p><b>Relational Intelligence (RI) is the ability to successfully connect with people and build strong, long-lasting relationships.</b> This is a critically important skill in business, where today's leaders need to create cultures of excellence that are relationship-oriented and foster great employee engagement. When put into practice, Relational Intelligence enables leaders to effectively communicate with employees from different backgrounds, cultures, and experiences. It lays the groundwork for having a positive and meaningful impact on the development of employees in your organization. Relationally intelligent leaders are <b>intentional</b> and <b>authentic</b> in how they build relationships. They create the conditions in which employees can bring their true selves to work. When this happens, organizations build inclusive cultures where people feel valued, heard, and a sense of belonging and purpose in their work and the business.</p>

  <p>Based on more than 20 years of research on leadership, relationships, and influence, Dr. Adam C. <b>Bandelli developed the Bandelli Relational Intelligence Model.</b> This groundbreaking work originated from his doctoral studies at the University of South Florida where he completed his dissertation focused on identifying the key skills leaders need to build dynamic, life-changing relationships with their employees. Today, the <b>Bandelli Relational Intelligence Model</b> focuses on five essential skills: (1) Establishing Rapport, (2) Understanding Others, (3) Embracing Individual Differences, (4) Developing Trust, and (5) Cultivating Influence. Research conducted by organizational psychologists at Bandelli & Associates has found that these five skills are related and can predict key organizational performance outcomes including: growth mindset, employee engagement, organizational commitment, employee retention, and financial profitability.</p>

  <p>To assess the Relational Intelligence Model, Bandelli & Associates has developed the <b>Bandelli Relational Intelligence Assessment<sup>®</sup></b>. This assessment provides leaders with a deep understanding of their strengths and development opportunities related to each of the five skills of Relational Intelligence. The test was designed for leaders ranging from senior executives in the C-suite to leaders on the frontlines. Our data science and analytics team developed the assessment by testing a rigorous psychometric validation process on thousands of leaders across different industries and business sectors. In the following pages, you will see detailed definitions of the Relational Intelligence skills and where you stand on each of the five dimensions, as well as the potential relational derailers that leaders need to avoid and which of these might be risk factors for you.</p>

  <div style="page-break-after: always;"></div>

  <!-- page 2 End -->



  <!-- page 3 Start -->

  <h2 class="page_head">How to Use this Report</h2>

  <p>There are some important points to keep in mind as you read this report. First, Relational Intelligence is a skill set that can be learned and developed over time. Just because you score within a specific range does not mean you cannot make improvements in that area. The Bandelli Relational Intelligence Assessment® was designed to raise your self-awareness and give you insights about your relationship-building skills as a leader today. Your results are a data point that can be used in conjunction with other leadership development activities (e.g., development planning, coaching, goal setting, mentoring) to help you grow.</p>

  <p>Second, relationships are reciprocal. This assessment will give you insights into where you can make improvements in how you go about building relationships. However, for a relationship to thrive, there must be a committed and continuous investment made by two people. Practicing these skills will help you to start this process with others.</p>

  <p>Lastly, Relational Intelligence is the quintessential skill set required to effectively lead people, teams, and organizations. When you learn these five skills, put them into practice, and begin modeling them for others, it dramatically improves the quality of your relationships. It takes time, energy, and effort to make relationships work. By developing your Relational Intelligence, you can have a lasting positive impact on others along your leadership journey. </p>

  <div style="background:#F2F2F2; padding:10px 30px 20px 30px;">
    <p>“When your relationships are strong, they serve as a gateway to your professional and personal growth. Our lives are changed by the people around us. With Relational Intelligence, you can be intentional and authentic about how you build connections with others. If you are purposeful about how you build relationships, your life will be transformed.” </p>
    <b>—Dr. Adam C. Bandelli</b>
  </div>

  <div style="page-break-after: always;"></div>

  <!-- page 3 End -->

</body>

</html>