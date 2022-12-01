
    // alert("Hello js!");
    var num = 10;
    let name = "cham"; //scope
    const arr = [10, 20, "Hi"];
    let obj = {name: "Dan", age: 20};
    const objMix = { data: [
        {name:"lol",gpa:4.00}, 
        {name: "kaya", age:100, gpa: 0.12}
        ] 
    };

    console.log(num);
    console.log(arr[2]);
    console.log(objMix.data[1].age);

    function add(a,b){
        return a + b;
    }

    let total =add(3, 5);
    
    document.getElementById("div1").innerHTML = name;

    $(function () {
        //alert("Hollo JQuery...");

        $("#btn1").click(function(){
            $("#div1").text("monky");   
    });

    $("#btn2").bind("click",()=>{
        $(".in1").val("monky");
    });

    $("#btn3").click(()=>{
        $(".in1:even").toggleClass("red");
    });

    $("#div_form").load("./pages/form.html")

    });//jQuery Handle
    
