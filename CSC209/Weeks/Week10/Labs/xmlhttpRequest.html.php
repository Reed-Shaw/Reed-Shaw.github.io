<!DOCTYPE html>
<html>
    <head>
        <title>XMLHttpRequest Tutorial</title>
        <link rel="stylesheet" href="./CSS/tutorials.css">
    </head>
    <body>
        <div class="headerDiv"><a href="./lab17.html">Back to Lab 17</a></div>
        <hr>
        <div class="mainDiv">
            <h1>XMLHttpRequest Tutorial</h1>
        </div>
        <hr>

        <div class="mainDiv">
            <h2>AJAX- XMLHttpRequest</h2>
            <p>The XMLHttpRequest object is used to request data from a server.</p>
        </div>
        <hr>
        <div class="mainDiv">
            <h3>Send a Request To a Server</h3>
            <p>To send a request to a server, we use the open() and send() methods 
                of the XMLHttpRequest object:
            </p>
        </div>
        <hr>
        <div class="mainDiv">
            <h3>The url - A File On a Server</h3>
            <p>The url parameter of the open() method, is an address to a file on a 
                server.
            </p>
            <p>The file can be any kind of file, like .txt and .xml, or server 
                scripting files like .asp and .php (which can perform actions on 
                the server before sending the response back).
            </p>
        </div>
        <hr>
        <div class="mainDiv">
            <h3>Asynchronous - True or False?</h3>
            <p>Server requests should be sent asynchronously. The async parameter of 
                the open() method should be set to true.
            </p>
            <p>By sending asynchronously, the JavaScript does not have to wait for the 
                server response, but can instead execute other scripts while waiting 
                for server response and deal with the response after the response is 
                ready.
            </p>
            <p>Note: The default value for the async parameter is async = true, so you
                don't have to include the third parameter in your code.
            </p>
        </div>
        <hr>
        <div class="mainDiv">
            <h3>GET or POST?</h3>
            <p>GET is simpler and faster than POST, and can be used in most cases.</p>
            <p>However, always use POST requests when: a cached file is not an option 
                (update a file or database on the server), sending a large amount of 
                data to the server (POST has no size limitations), or sending user input 
                (which can contain unknown characters). POST is more robust and secure 
                than GET.
            </p>
        </div>
        <hr>
        <div class="mainDiv">
            <h3>GET Requests</h3>
            <p>A simple GET request look like this:</p>
            <p>
                <code>
                    xhttp.open("GET", "demo_get.asp");<br>
                    xhttp.send();
                </code>
            </p>
            <p>In the example above, you may get a cached result. To avoid this, add a 
                unique ID to the URL:
            </p>
            <p>
                <code>
                    xhttp.open("GET", "demo_get.asp?t=" + Math.random());<br>
                    xhttp.send();
                </code>
            </p>
            <p>If you want to send information with the GET method, add the information 
                to the URL:
            </p>
            <p>
                <code>
                    xhttp.open("GET", "demo_get2.asp?fname=Henry&lname=Ford");<br>
                    xhttp.send();
                </code>
            </p>
        </div>
        <hr>
        <div class="mainDiv">
            <h3>POST Requests</h3>
            <p>A simple POST request looks like this:</p>
            <p>
                <code>
                    xhttp.open("POST", "demo_post.asp");<br>
                    xhttp.send();
                </code>
            </p>
            <p>To POST data like an HTML form, add an HTTP header with 
                setRequestHeader(). Specify the data you want to send in the 
                send() method:
            </p>
            <p>
                <code>
                    xhttp.open("POST", "ajax_test.asp");<br>
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");<br>
                    xhttp.send("fname=Henry&lname=Ford");
                </code>
            </p>
        </div>
        <hr>
        <div class="mainDiv">
            <h3>Synchronous Request</h3>
            <p>To execute a synchronous request, change the third parameter in the 
                open() method to false:
            </p>
            <p>
                <code>
                    xhttp.open("GET", "ajax_info.txt", false);
                </code>
            </p>
            <p>Note: Don't set do this. We always want that parameter set to true.</p>
        </div>
    </body>
</html>