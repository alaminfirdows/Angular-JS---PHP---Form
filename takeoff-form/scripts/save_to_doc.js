// save data with sheetrock

var doc_url='https://docs.google.com/spreadsheets/d/1DTmNrx2W567Ay09ZUfA8viZv0nud-liyxgSLgKIVS50/edit#gid=814357997';

sheetrock({
  url: doc_url,
  query:qury,
  reset:"true",
  callback: myCallback
});

// End save data with sheetrock


// save data by AJAX
function SaveData(){
  var name,email,student_id,phone;
  name=$("#name").val();
  email=$("#email").val();
  student_id=$("#StudentID").val();
  phone=$("#phone").val();
  //  console.log(name);
    $.ajax({
      url:"https://docs.google.com/forms/d/e/1FAIpQLSfFYssFwwUhdr5Ty5G3cVRDwuS8oG6vtjp-JZYBSuOsbmKuhg/formResponse",
      data:{"entry.903327979":name, "entry.1677457883":Email,"entry.31396859":ID,"entry.388558593":PhoneNo},
      type:"POST",
      dataType:"xml",
      statusCode:{0:function(){
        window.location.replace("Thank you.html");
      },200:function(){
        window.location.replace("Thank you.html");}
      }
  });
}