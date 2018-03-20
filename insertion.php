

<!doctype html>
<html lang="en">
  <head>
    <title>Insertion Sort-algoskills</title>
    <meta name="description" content="Insertion sort is a simple algorithm in which we insert numbers and sort the array in the same way we arrange our playing cards.Click to know it's ideology,pseudo code,code and much more!">
    <meta charset="utf-8">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="./css/algo_styling.css">
 <link rel="icon"  href="./images/algoskills_logo.png" /> 
  <link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/atom-one-light.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<link rel="stylesheet" href="/path/to/styles/default.css">
<script src="/path/to/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
 <!-- Latest compiled and minified JavaScript -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113551139-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-113551139-1');
</script>
   
  </head>
  <body>
      <div class="navbar navbar-default navbar-collapse-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>

            </button>
              <a  class="navbar-brand" href="home.php" style="margin-top: 8px;"><span><img style="padding-bottom: 4px" src="./images/algoskills_logo1.png"></span><span style="font-weight: bold;font-family: 'Raleway', sans-serif;color: white;"> algo<span style="color:  #e8491d">skills</span></span></a>
            </div>
              <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li ><a style="font-weight: bold;font-family: 'Raleway', sans-serif;"  href="home.php">HOME</a></li>
                  <li ><a style="font-weight: bold;font-family: 'Raleway', sans-serif;" href="about.php">ABOUT</a></li>
                  <li  class="active" ><a href="#" style="font-weight: bold;font-family: 'Raleway', sans-serif;">ALGORITHMS</a></li>
                  <li ><a style="font-weight: bold;font-family: 'Raleway', sans-serif;" href="write.php">WRITE AN ARTICLE</a></li>
                   <li class="dropdown">
                    <a style="font-weight: bold;font-family: 'Raleway', sans-serif;" href="#" class="dropdown-toggle" data-toggle="dropdown">
                            
                                                                                   <li><a style='font-family:Raleway;' href='index.php'>LOGIN/REGISTER</a></li> 
                             
                    </ul>
              </div> 
          </div>
        </div>

  
          <div class="container">
             
             <div class="introduction">
            <h1 style="font-family: 'Raleway', sans-serif;color:  #e8491d;">Insertion Sort</h1>
            <a href="insertion_brief.php" style="font-weight: bold;font-family: 'Raleway', sans-serif;font-size: 20px;"> In hurry ! Click to know in brief ( Quick Review ) </a>
            <h3 style="font-weight: bold;font-family: 'Raleway', sans-serif;color:  #e8491d
   			">What does it mean? </h3>
            <p style="font-size:120%;font-family: 'Raleway', sans-serif;"> Insertion sort is a simple algorithm in which we insert numbers and sort the array in the same way we arrange our playing cards. If you try to understand the following picture, you can even write the code by yourself !</p>
            <div class="row">
          <div> <img class="mainimagesolo" src="./images/insert2.png"><br>
            <a href="./images/insert2.png" target="_blank" class="clicktoopen">Click to open image in new tab</a><br></div>
          </div>
            <p style="font-size:120%;font-family: 'Raleway', sans-serif;">
            We start with the very first two cards facing towards the player. We pick the second card and compare with the first, and arrange the first two cards(here in ascending order). Consequently we now pick the third card and <i style="color: #e8491d">insert</i>  it in appropriate position in the first two sorted cards and so on, the whole set of playing cards is sorted!   
            </p>
            <h3 style="font-family: 'Raleway', sans-serif;">Concept</h3>
            <p style="font-size: 120%;font-family: 'Raleway', sans-serif;"> Very similar to the above explanation, here we have a set of numbers which need to be sorted, suppose in ascending order. So we assume first number as sorted and thus take the second number and compare it with the first and finally arrange them. Now we take the third number and insert it in the first two sorted numbers. <i style="color: black">Likewise in insertion sort, a number is always to be inserted in the sorted set of previous numbers.</i>  </p>
            <h4 style="font-family: 'Raleway', sans-serif;color:#e8491d">Pseudo Code</h4>
            <pre class="coding"><code class="c++" style="font-weight: bold;"> 
for(i = 1 to size-1) //selecting numbers from second place till end
{
    value = a[i]
    j = i-1
    //Insert value=a[i] in the sorted array a[0,1,2....i-1]
    while(j >= 0 and a[j] > value )
      {
         a[j+1]=a[j]//Shift bigger numbers to right
         j=j-1
      }
    a[j+1]= value //put the value in the proper place
}
                </code></pre>
         
             
            <h3 style="font-weight: bold;font-family: 'Raleway', sans-serif;color:  #e8491d
        ">Illustration</h3>
        <p style="font-size: 120%;font-family: 'Raleway', sans-serif;">Consider the following array <font style="color: red">a=[5, 7, 4, 6, 2]</font> and assume we have to arrange in ascending order.<br>
                
        <div class="row">
          <div> <img class="mainimagesolo" src="./images/insertion2.png"><br>
            <a href="./images/insertion2.png" target="_blank" class="clicktoopen">Click to open image in new tab</a><br></div>
          </div>
          <br>
             <p style="font-size: 120%;font-family: 'Raleway', sans-serif;">
              In the above illustration, first number i.e. a[0]=5 is kept as it is and second number i.e. a[1]=7 is compared with it. Since 7 > 5 there is no change and 5 and 7 is sorted. Now in second step, a[2]=4 is taken and inserted in the sorted set of 5 and 7. Now in third step, a[3]=6 is taken and inserted in the sorted set of 4,5 and 7. For which, 7 is shifted to right i.e. at a[3] and a[2] is now ready for inserting 6.Last part is inserting a[4]=2 at the very start.</p> 

        <h3 style="font-family: 'Raleway', sans-serif;">Code</h3>
            <pre class="coding"> <code class="c++" style="font-weight: bold;"> 
#include<<strong>iostream</strong>>
using namespace std;
void insertion(int a[], int n); //forward declaration
int main()
{
  int n,i,j;
  cout<<"Enter total number of elements/size: ";
  cin>>n;
  int arr[n];
  cout<<"Enter numbers: ";
  for(i = 0;i< n; i++)// to input the numbers into an array
    cin>>arr[i];
  insertion(arr,n);
  cout<<"Array sorted in increasing order: "<< endl;
    for(i = 0;i< n; i++)
  cout<< arr[i]<<" ";
  return 0;
}

void insertion(int a[], int n)
{
  int i,j,value;
  for(i = 1; i< n; i++) //selecting numbers from second place till end
  {
    value = a[i];
    j = i-1;
    //Insert value=a[i] in the sorted array a[0,1,2....i-1]
    while (j >= 0 and a[j] > value )
    {
      a[j+1]=a[j]; //Shift bigger numbers to right
      j=j-1;
    }
    a[j+1]= value;
  }
}
            </code> </pre>
         
          <br>
          <h4 style="font-family: 'Raleway', sans-serif;color:#e8491d;font-weight: bold;">Explaining the code!</h4>
          <p style="font-size: 120%;font-family: 'Raleway', sans-serif;">
            In the 'insertion' function, we receive the array as <i>a</i>  and size as  <i>n</i>. Now the objective of <i>for</i> loop is to get numbers from second position to the last position thus starting from a[ 1 ]. <i>While</i> loop gives the subarray of numbers, left to the index i or  a[ i ]. Thus the upper limit of  <i>j</i> is <i>i-1</i>. The objective of <i>while</i> loop is to put the value=a[ i ] at the correct position in array a[ 0,1,2..i-1 ]. So it shifts numbers > value to the right, creating a kind of vacancy at its former position. Now as soon as a[ j ]<=value (condition of while loop fails), then value or a[ i ] is inserted at one cell ahead i.e. at a[ j+1 ].
          </p> 
          <h4 style="font-family: 'Raleway', sans-serif;color:#e8491d;font-weight: bold;">Time and Space Complexity</h4> 
          <p style="font-size: 120%;font-family: 'Raleway', sans-serif;">
            The outer <i>for</i> loop runs n-1 times. The statements within the while loop can be executed from zero upto a maximum of <i>i</i> times. Thus in the worst case, assume every time the while loop is executing <i>i</i> times. Instead of counting the total number of lines of code we need to compare and shift, lets assume it as c. Therefore total execution in first step is c*1, then c*2 and so on till c*(n-1). Total executions is c*1+ c*2 + c*3 +....+ c*(n-1) = c*n(n-1)/2. So time complexity for worst case is O(n<sup>2</sup>).
            <br>
             • Worst-case performance  O(n<sup>2</sup>) <br>
           • Best-case performance O(n) <i> ~ (when array is already sorted) </i><br>
             • Average performance O(n<sup>2</sup>)<br>
             • Space complexity O(1)
          </p>
          
          <h4 style="font-family: 'Raleway', sans-serif;color:#e8491d;font-weight: bold;">Hope you enjoyed!</h4>
            </div>
         
            <br>
            <p style="font-size: 120%;font-family: 'Raleway', sans-serif;"> 
             References:<br>
             <a  target="_blank" href="https://www.flipkart.com/introduction-algorithms-3rd/p/itmdwxyrafdburzg?gclid=CjwKCAiA1uHSBRBUEiwAkBCtzYR8ippU76IGHtHrIW-H40akWpmpDJRgPbHKnYTlhtcqQEXZXi0rohoC_JoQAvD_BwE&pid=9788120340077&lid=LSTBOK9788120340077IW3FJJ&cmpid=content_book_8965229628_gmc_pla&tgi=sem%2C1%2CG%2C11214002%2Cg%2Csearch%2C%2C170219493259%2C1o1%2C%2C%2Cc%2C%2C%2C%2C%2C%2C%2C&s_kwcid=AL%21739%213%21170219493259%21%21%21g%21299142545466%21&ef_id=WiV3FQAABLCavhMd%3A20180113034702%3As">CLRS book</a><br>
             <a target="_blank" href="https://www.flipkart.com/fundamentals-computer-algorithms-2nd/p/itmeyf6efzzdvfzw?gclid=CjwKCAiAtdDTBRArEiwAPT4y-9yodNfBALo7s16zLKdBl_wlqkIKQSRg-LD6Ycd2CrmkBaQDFZxupRoCNIcQAvD_BwE&pid=9788173716126&lid=LSTBOK978817371612625ID4M&cmpid=content_book_8965229628_gmc_pla&tgi=sem%2C1%2CG%2C11214002%2Cg%2Csearch%2C%2C170219493259%2C1o1%2C%2C%2Cc%2C%2C%2C%2C%2C%2C%2C&s_kwcid=AL%21739%213%21170219493259%21%21%21g%21299142545466%21&ef_id=WKf1hQAAADix8GO4%3A20180202180533%3As"> Fundamental of Computer Algorithms by Horowitz</a><br>
             <a target="blank" href="https://en.wikipedia.org/wiki/Insertion_sort">wikipedia</a>       
             <br><br>
             <p style="font-size: 120%;font-family: 'Raleway', sans-serif;"> 
             Feel free to comment! Your suggestions or doubts are welcomed.<br></p>
            <br><br><br>
          <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://algoskills-insertion-sort.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
          </div>
                   
    
      
        <br><br>

       <div class="navbar navbar-inverse navbar-static-bottom">
        <div class="container">
              <div class="navbar-text pull-left">
              algoskills
              <a href="advertise.php" style="margin-left: 45px">Advertise at cheap rates!</a> 
        </div>
        <div class="navbar-text pull-right">
                <div >Follow us on : </div>
                <span class="social" style=""> <a target="blank" href="https://www.facebook.com/algoskills/"><img src="./images/fb.png"></a>
                <span class="social" style=""><img src="./images/gmail.png">
                <span>  algoskills@gmail.com</span></span></span> 
        </div>
         </div>
       </div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>
