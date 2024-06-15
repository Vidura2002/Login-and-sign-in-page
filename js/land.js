function myFunction() {
    var x = document.getElementById("nav");
    console.log('Before:', x.className);
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
    console.log('After:', x.className);
  }

AOS.init();

let items=new Array();
let prices=new Array();
let total=0;
let code=Math.random();
code=Math.floor(code*10000);
console.log(code);

$(document).ready(function(){
  $("#cart1").click(function(){
    items.push("Rollex black kit");
    prices.push(250);
    $("#cart1").val("added");
  })
  $("#cart2").click(function(){
    items.push("Noice buds");
    prices.push(55);
    $("#cart2").val("added");
  })
  $("#cart3").click(function(){
    items.push("Luxury Handbag");
    prices.push(99);
    $("#cart3").val("added");
  })
  $("#cart4").click(function(){
    items.push("Nike Mizzen");
    prices.push(219);
    $("#cart4").val("added");
  })
  $("#cart5").click(function(){
    items.push("Gradiant Sunglass");
    prices.push(41);
    $("#cart5").val("added");
  })
  $("#cart6").click(function(){
    items.push("Fossel Ladies");
    prices.push(149);
    $("#cart6").val("added");
  })
  $("#cart7").click(function(){
    items.push("Women's matsutake");
    prices.push(499);
    $("#cart7").val("added");
  })
  $("#cart8").click(function(){
    items.push("Sophia Diaper Bag");
    prices.push(223);
    $("#cart8").val("added");
  })

  $("#cartBtn").click(function(){
    for(let i=0;i<3;i++){
      if(items[i]===undefined){
        break;
      }
      total+=Number(prices[i]);
      let newDiv=$('<div></div>').text(`${items[i]} :       ${prices[i] } $`);
      newDiv.css({
        'width':'25rem',
        'border':'2px solid black',
        'padding-left':'2rem',
        'font-weight':'600',
        'color':'blue',
        'background-color':'white',
      })
      $("#item1").append(newDiv);
    }
    let newDiv2=$('<div></div>').text(`Total Payment : ${total}$`);
      newDiv2.css({
        'width':'25rem',
        'border':'2px solid black',
        'padding-left':'1rem',
        'font-weight':'600',
        'height':'4rem',
        'font-size':'2rem',
        'color':'rgb(224, 77, 102)',
        'background-color':'white',
      })

      $("#item1").append(newDiv2);
      let codeDiv=$('<div></div>').text(`pass code : ${code}`);
      codeDiv.css({
        'float':'right',
        'position':'absolute',
        'bottm':'1rem',
        'right':'1rem',
        'color':'black',
        'font-weight':'600',
      })
      $("#payment").append(codeDiv);
      $("#payment").fadeIn(2000);
  });

  $("#cancel").click(function(){
    $("#payment").fadeOut(2000);
    window.location.href="land.php";
  });

  $("#pay").click(function(){
    $("#payment").fadeOut(2000);
    setTimeout(()=>{
      $("#confirm").fadeIn(2000);
    },2000);
  });

  $("#confirmBtn").click(function(){
      let entered=$("#passcode").val();
      if(entered==code){
        let newDiv3=$("<div id='s'></div>").text(`payment sucsessfull.`);
        newDiv3.css({
          'color':"green",
        })
        $("#confirm").append(newDiv3);
        setTimeout(()=>{
          $("#confirm").fadeOut(1000);
          window.location.href="land.php";
        },2000);
        
      }
      else{
        let newDiv4=$("<div id='f'></div>").text(`payment faild!!.wrong passcode`);
        newDiv4.css({
          'color':"red",
        })
        $("#confirm").append(newDiv4);
        setTimeout(()=>{
          $("#confirm").fadeOut(1000);
          window.location.href="land.php";
        },2000);

      }

  });

});

console.log(items);
