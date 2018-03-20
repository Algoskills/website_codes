

<!doctype html>
<html lang="en">
  <head>
    <title>Bubble Sort-algoskills</title>
    <meta name="description" content="Bubble sort is the most basic and easiest form of sorting. It's working can be understood by knowing why it's called bubble sort ! Just like as a bubble in water goes from bottom to top, this sort is named for the way smaller or larger elements bubble to the top of the list depending on the order of sorting.">
    
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
            <h1 style="font-family: 'Raleway', sans-serif;color:  #e8491d;">Bubble Sort</h1>

            <a href="bubble_brief.php" style="font-weight: bold;font-family: 'Raleway', sans-serif;font-size: 25px;"> In hurry ! Click to know in brief ( Quick Review ) </a>
            <h3 style="font-weight: bold;font-family: 'Raleway', sans-serif;color:  #e8491d
        ">What does it mean? </h3>
            <p style="font-size:120%;font-family: 'Raleway', sans-serif;"> Bubble sort is the most basic and easiest form of sorting. It's working can be understood by knowing why it's called "bubble" sort! Just like as a bubble in water goes from bottom to top, this sort is named for the way smaller or larger elements "bubble" to the top of the list depending on the order of sorting. </p>
            <h3 style="font-family: 'Raleway', sans-serif;">Concept</h3>
            <p style="font-size: 120%;font-family: 'Raleway', sans-serif;"> In bubble sort, total number of cycles/round is n-1 (where n is the total number of elements). Let i denote the cycle i.e. 0 ≤ i < n-1. In each cycle, we compare two consecutive numbers, starting with the first two elements ,so we need a nested loop say j where 0 ≤ j < (n-1)-i. You'll get to know as why the limit of inner loop i.e. j loop is (n-1)-i and goes on decreasing in the following illustration.</p>
            <h4 style="font-family: 'Raleway', sans-serif;color:#e8491d">Pseudo Code</h4>
<pre class="coding"> <code class="c++" style="font-weight: bold;">
for( i = 0 and i < size-1 )     //for cycles 
  for(j = 0 and i < (size-1)-i )//for comparison 
       if(a[j] > a[j+1])
          then swap them //for increasing order 

</code></pre>
  
            
             <p style="font-size:120%;font-family: 'Raleway', sans-serif;">
             For instance, lets assume increasing order of sorting. While comparing, the idea is to bring the larger number towards the bottom/end of the array by simply swapping them. So we see if a[ j ] > a[ j+1 ], we swap a[ j ] with a[ j+1 ].  Lets see how it works !</p>
            <h3 style="font-weight: bold;font-family: 'Raleway', sans-serif;color:  #e8491d
        ">Illustration</h3>
        <p style="font-size: 120%;font-family: 'Raleway', sans-serif;">Consider the following array <font style="color: red">a=[5, 7, 4, 2]</font> and assume we have to arrange in ascending order.<br>
        Total number of cycle= n-1 = 4-1 =  3 </p>
        
        
        <div class="row">
          <div class="col-md-9"> <img class="mainimage"  src="./images/bubble2.png" ><br>
            <a href="./images/bubble2.png" target="_blank" >Click to open image in new tab</a><br></div>
          <div class="col-md-3">
            <img class="image1"  src="./images/bubblearray1.png">
        </div> 
          </div>
          <br>
             <p style="font-size: 120%;font-family: 'Raleway', sans-serif;">
              In the above illustration, we have seen that how the two consecutive numbers are compared. It should be noted that comparison always starts from the first two elements irrespective of cycle. In cycle 1, since a[ 1 ] i.e. 7 is the largest, so it settles at the bottom. Therefore in the next cycle, we need not to compare other elements with the last one, and hence the limit of inner loop i.e. limit of j goes on decreasing by 1 and is given as (n-1)-i or (n-i)-1. We also see that a[ 3 ] i.e. 2 bubbles up to the top position. </p>        
       
        <h3 style="font-family: 'Raleway', sans-serif;">Code</h3>
            <div class="container">
                   
  <pre class="coding"><code class="c++" style="font-weight: bold;">
#include<<strong>iostream</strong>>
using namespace std;
void bubble(int a[], int n); //forward declaration
int main()
{
  int n,i,j;
  cout<<"Enter total number of elements/size: ";
  cin>>n;
  int arr[n];
  cout<<"Enter numbers: ";
  for(i = 0;i< n; i++)// to input the numbers into an array
  cin>>arr[i];
  bubble(arr,n);
  cout<<"Array sorted in increasing order: "<< endl;
  for(i = 0;i< n; i++)
  cout<< arr[i]<<" ";
  return 0;
}

void bubble(int a[], int n) //Notice something special? read explanation below!
{
  int i,j,temp;
  for(i = 0;i< n-1; i++) //for cycles
  for (j = 0; j < (n-1)-i; j++) //for comparison
  {
    if( a[j] > a[j+1]) //use < for decreasing order
    {
      temp= a[j];//temp is used to swap/exchange a[j] and a[j+1]
      a[j]= a[j+1];
      a[j+1]=temp;
    }
  }
}
 </code></pre>
          <br>
          <h4 style="font-family: 'Raleway', sans-serif;color:#e8491d;font-weight: bold;">Point to be noted!</h4>
          <p style="font-size: 120%;font-family: 'Raleway', sans-serif;">
              You may have noticed that we sent array 'arr' in the function bubble and have received the array in another variable 'a'. The special thing is that we have sorted the array 'a' but have not returned any value and still we notice array 'arr' has changed in the main. If you know concepts of pointer you may read ahead otherwise let it be, just understand the algorithm! There's a rule, ''<i style="color: #e8491d">arrays decay into pointers, when passed to a function''</i>. It means that when you write <i style="color: black"> void bubble( int a [ ])  </i>  then  it is exactly same as <i style="color: black">  void bubble(int *a)</i> .So you are basically changing the array 'arr' with the help of a pointer and thus it happens! </p>
          <h4 style="font-family: 'Raleway', sans-serif;color:#e8491d;font-weight: bold;">Time and Space Complexity</h4> 
          <p style="font-size: 120%;font-family: 'Raleway', sans-serif;">
            From the illustration above, it is clear that inner loop executes (n-1) times in the first cycle and then it goes on decreasing by 1 in further cycles. Thus the total number of comparisons are (n-1)+ (n-2) + (n-3) + ....+ 2 + 1 . So it's sum is n(n-1)/2 and therefore <span style="color: red" > time complexity is O(n<sup>2</sup>). </span> It's not a good sorting algo but it is very simple,easy to understand and even has space complexity of O(1). It is preferred when array is mostly sorted beforehand, which rarely happens.<br>
             • Worst-case performance  O(n<sup>2</sup>) <br>
           • Best-case performance O(n) <i> ~ (when array is already sorted) </i><br>
             • Average performance O(n<sup>2</sup>)<br>
             • Space complexity O(1)
          </p>
          <h4 style="font-family: 'Raleway', sans-serif;color:#e8491d;font-weight: bold;">Modified Code!</h4>

  <pre class="coding"> <code class="c++" style="font-weight: bold;">
#include<<strong>iostream</strong>>
using namespace std;
int main()
{
int n,i,j,flag,temp;
n=6;
int a[6]={4,66,2,8,9,-85};
for(i = 0;i< n-1; i++) //for cycles
  {
    flag=0;//flag is given
    for (j = 0; j < (n-1)-i; j++) //for comparison
    {
      if( a[j] > a[j+1]) //use < for decreasing order
      {
        temp= a[j];//temp is used to swap/exchange a[j] and a[j+1]
        a[j]= a[j+1];
        a[j+1]=temp;
        flag=1;//A mark for occurence of swapping
      }
    }
    if(flag==0)//No swapping took place, array is sorted!
    break;
  }
cout<<"Array sorted in increasing order: "<< endl;
for(i = 0;i< n; i++)
  cout<< a[i]<<" ";
return 0;
}
 </code></pre>
  
          
          <p style="font-size: 120%;font-family: 'Raleway', sans-serif;">
            Here you can notice, using a flag can help us minimize the time of the program since the loop breaks when no swapping occurred. Consider an example a=[1, 2, 3, 5, 4]. In the end of first cycle we have a=[1, 2, 3, 4, 5] and in the second cycle, no swapping will take place. Thus we can simply break the loop and save the time! Just as an alternative, here input was not taken from the user rather the input was programmer defined. 
          </p>
          <h4 style="font-family: 'Raleway', sans-serif;color:#e8491d;font-weight: bold;">Hope you enjoyed!</h4>
            </div>
         </div>
         <br><br>
          <p style="font-size: 120%;font-family: 'Raleway', sans-serif;"> 
             References:<br>
             <a  target="_blank" href="https://www.flipkart.com/introduction-algorithms-3rd/p/itmdwxyrafdburzg?gclid=CjwKCAiA1uHSBRBUEiwAkBCtzYR8ippU76IGHtHrIW-H40akWpmpDJRgPbHKnYTlhtcqQEXZXi0rohoC_JoQAvD_BwE&pid=9788120340077&lid=LSTBOK9788120340077IW3FJJ&cmpid=content_book_8965229628_gmc_pla&tgi=sem%2C1%2CG%2C11214002%2Cg%2Csearch%2C%2C170219493259%2C1o1%2C%2C%2Cc%2C%2C%2C%2C%2C%2C%2C&s_kwcid=AL%21739%213%21170219493259%21%21%21g%21299142545466%21&ef_id=WiV3FQAABLCavhMd%3A20180113034702%3As">CLRS book</a><br>
             <a target="_blank" href="https://www.flipkart.com/fundamentals-computer-algorithms-2nd/p/itmeyf6efzzdvfzw?gclid=CjwKCAiAtdDTBRArEiwAPT4y-9yodNfBALo7s16zLKdBl_wlqkIKQSRg-LD6Ycd2CrmkBaQDFZxupRoCNIcQAvD_BwE&pid=9788173716126&lid=LSTBOK978817371612625ID4M&cmpid=content_book_8965229628_gmc_pla&tgi=sem%2C1%2CG%2C11214002%2Cg%2Csearch%2C%2C170219493259%2C1o1%2C%2C%2Cc%2C%2C%2C%2C%2C%2C%2C&s_kwcid=AL%21739%213%21170219493259%21%21%21g%21299142545466%21&ef_id=WKf1hQAAADix8GO4%3A20180202180533%3As"> Fundamental of Computer Algorithms by Horowitz</a><br>
             <a target="_blank" href="https://en.wikipedia.org/wiki/Bubble_sort" target="_blank">wikipedia</a> <br>
             
             <br><br>
             <p style="font-size: 120%;font-family: 'Raleway', sans-serif;"> 
             Feel free to comment! Your suggestions or doubts are welcomed.<br></p>
             <div id="disqus_thread"></div>
             </div>
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
s.src = 'https://algoskills-bubble-sort.disqus.com/embed.js';
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
