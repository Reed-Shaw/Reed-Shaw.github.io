//Function that shows a 'secret' message. 
function readFunction() { 
    let text1 = "On Sunday, Sept 20th, we will be going on a field trip to Mass MoCA to learn about James Turrell! This is a non-required field trip, but if you can, you should go!";
    if(document.getElementById("showAndHide").innerHTML  === ""){
        document.getElementById("showAndHide").innerHTML = text1;
        document.getElementByID("readMeButton").innerHTML = "Hide Text";
    }
    else{
        document.getElementById("showAndHide").innerHTML = "";
    }
}

//Function that shows the day of the week followed by the month, date, and year.
function showTime() {
    //Initialize day which will be the final product.
    let day = "Today's date is: ";
    //Create a date object
    const d = new Date();
    //find the day of the week and add it to 'today'
    let today;
    let date = new Date().getDay();
    switch (date) {
        case 0:
            today = "Sunday";
            break;
        case 1:
            today = "Monday";
            break;
        case 2:
            today = "Tuesday";
            break;
        case 3:
            today = "Wednesday";
            break;
        case 4:
            today = "Thursday";
            break;
        case 5:
            today = "Friday";
            break;
        case  6:
            today = "Saturday";
    }
    day += " " + today;
    //Add the month to 'day'
    const month = ["January","February","March","April","May","June","July","August","September","October","November","December"];
    day += ", " + month[d.getMonth()];
    //Add the number of the month to 'day'
    day += " " + d.getDate();
    //Add the year to 'day'
    day += ", " + d.getFullYear();
    
    //populates the id "showTime" with "day" if it is empty and empties it if not.
    if(document.getElementById("showTime").innerHTML  === ""){
        document.getElementById("showTime").innerHTML = day;
        document.getElementByID("timeButton").innerHTML = "Hide Text";
    }
    else{
        document.getElementById("showTime").innerHTML = "";
    }
}

//Function that credits any websites used in the making of the homework
function showCredits() {
    let text2 = "W3Schools";
    if(document.getElementById("myCredits").innerHTML  === ""){
        document.getElementById("myCredits").innerHTML = '<a href="https://www.w3schools.com/" target="_blank">W3Schools</a>, <a href="https://www.w3schools.com/css/css_display_hide.asp" target="_blank">W3 Schools Visibility/Hide Tutorial</a>';
        document.getElementByID("creditsButton").innerHTML = "Hide Text";
    }
    else{
        document.getElementById("myCredits").innerHTML = "";
    }
}

//Function that hides the schedule table and replaces it when a button is clicked.
function hideSchedule() {
    var x = document.getElementById("scheduleTable");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

//Function that changes the color theme of the webpage.
 function changeTheme(){
    let theme = document.getElementById('theme');
    // Toggle between light.css and dark.css
    if (theme.getAttribute('href') == './Css/technical.css') {
        theme.setAttribute('href', "./Css/technicalDarkMode.css");
    } else {
        theme.setAttribute('href', './Css/technical.css');
    }
}

//Function that changes the navigation bar to the left or the right depending on where it is when a button is clicked.
function changeNavBar() {
    const navBarElement = document.getElementById("navBar");  // Get the DIV element
    const divElement = document.getElementById("myDiv");
    if(navBarElement.classList == "leftsidenav") {
        navBarElement.classList.remove("leftsidenav"); // Remove leftsidenav class from DIV
        navBarElement.classList.add("rightsidenav"); // Add rightsidenav class to DIV
        divElement.classList.remove("content"); // Remove content class from DIV
        divElement.classList.add("contentRight"); // Add newone contentRight to DIV
    } else {
        navBarElement.classList.remove("rightsidenav"); 
        navBarElement.classList.add("leftsidenav"); 
        divElement.classList.remove("contentRight"); 
        divElement.classList.add("content"); 
    }
}

//Function that hides a row in the schedule. 
function hideRow(rowId) {
    const tableRow = document.getElementById(rowId);
    //document.getElementById('row2').style.display = "none";
    if (tableRow.style.display === "table-row") {
        tableRow.style.display = "none";
    } else {
       tableRow.style.display = "table-row";
    }
}

