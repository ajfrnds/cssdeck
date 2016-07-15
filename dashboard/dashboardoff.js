$(document).ready(function(){
	 
  /* for testing purposes only */
  /*$('input[id*=exp], input[id*=content]').attr('checked', true);
  $('input').attr('checked', true);*/
  
  $(".content, .brand, .seo, .val, .testing, .rwd, .perf, .worst, .forms, .contact,  .error, .prod").hide();
  
  /* intialize icons */
  $(".content-icon, .brand-icon, .seo-icon, .val-icon, .testing-icon, .rwd-icon, .perf-icon, .worst-icon, .forms-icon, .contact-icon,  .error-icon, .prod-icon").toggleClass("arrow-right");
  
  $(".exp-icon").toggleClass("arrow-down");
  
  /*************** toggle sections ***************/
  
  function toggleSection(sectionChoice){
    var action = ".toggle_" + sectionChoice;
    var icon = "." + sectionChoice + "-icon";
    var section = "." + sectionChoice;
    $(action).click(function(){ 
      $(icon).toggleClass("arrow-right");
      $(icon).toggleClass("arrow-down");
      $(section).slideToggle(); return false;
      
    });
  }
  
  toggleSection("exp"); toggleSection("content"); toggleSection("brand"); toggleSection("seo"); toggleSection("val"); toggleSection("testing"); toggleSection("rwd"); toggleSection("perf"); toggleSection("worst"); toggleSection("forms"); toggleSection("contact"); toggleSection("error"); toggleSection("prod");
  
  
  
  /*************** count sections ***************/ 
  
  var count = 0;
  var checked = 0;
  
  function countBoxes() { return $("input[type='checkbox']:enabled").length; }
  
  function countChecked() {
    checked = $("input[type='checkbox']:checked").length;
    count = countBoxes();
    console.log("boxes: " + count);
    console.log("checked: " + checked);
    var percentage = parseInt(((checked / count) * 100), 10);
    $(".progressbar-bar").progressbar({
      value: percentage
    });
    $(".progressbar-label").text(percentage + "% Off-boarding-Complete");
    
    if (count === checked) { $(".ready").text('Ready to Launch!'); }
    else { $(".ready").text(''); }
    
    markComplete("exp"); markComplete("content"); markComplete("brand"); markComplete("seo"); markComplete("val"); markComplete("testing"); markComplete("rwd"); markComplete("perf"); markComplete("worst"); markComplete("forms"); markComplete("contact"); markComplete("error"); markComplete("prod");
  }
  
  $(":checkbox").click(countBoxes);
  countChecked();
  $(":checkbox").click(countChecked);
  
  /* mark section completed */
  
  function countBoxesInSection(section) { 
    answer = $("input[type='checkbox'][name*='" + section + "']:enabled").length; 
    console.log("boxes in section: " + answer);
    return answer;
  }
  
  function countCheckedInSection(section) {
    answer = $("input:checked[name*='" + section + "']").length;  
    console.log("checked in section: " + answer);
    return answer;
  }
  
  function markComplete(section) {
    if (countBoxesInSection(section) === countCheckedInSection(section)) {
      $("." + section  +"-complete").addClass("complete");
    }
    else {
      $("." + section  +"-complete").removeClass("complete");
    }
  }
  
  /* reset all checks*/
  $( ".reset" ).click(function() { 
    $('input').attr('checked', false); 
    $('input').attr('disabled', false); 
    countChecked();
  });
  
  /* mark as N/A */
  
  /* If checkbox doesn't have class "na" then disable checkbox and add the class. If checkbox currently has class "na" then checkbox is currently disabled, re-enable it and remove the class  */
  $( "span[class*='na']" ).click(function() { 
    if ($( this ).hasClass( "na" ) !== true) {
      $(this).addClass("na");
      $(this).siblings( "input" ).attr("disabled", true); 
      $(this).siblings( "input" ).attr("checked", false); 
    }
    else {
      $(this).siblings( "input" ).attr("disabled", false); 
      $(this).removeClass("na");
    }
    countChecked();
  });
  
  /* comment box */
  
  $( "div[class*='comment'] .icon-comment" ).click(function() { 
    $( this ).siblings(".comment-box").slideToggle();
  });
  
  /* comment box character count */
  
  /* based on:
 http://www.findsourcecode.com/jquery/how-to-count-number-of-characters-in-textarea-jquery/ */
  
  var charMax = 250;
  $("[class*='comment-textbox']").keyup(function () {
    var textLength = $(this).val().length;
    var charLeft = $(this).siblings("[class*='characterLeft']");
    if (textLength >= charMax) {
      $(charLeft).text('You have reached the limit of ' + charMax + ' characters');
    } else {
      var count = charMax - textLength;
      $(charLeft).text(count + ' Characters Left');
    }
    
    /* show comment icon when comment is present */
    var currentComment = $(this).parents("div[class*='-comment']");
    if (textLength > 0 ) { $(currentComment).addClass("comment-present"); }
    else { $(currentComment).removeClass("comment-present"); }
  });
  
$("span#login, #mask, #pop-up #x").click(function() {
  $("#mask, #pop-up").toggle("fade", 350);
  
});
});
