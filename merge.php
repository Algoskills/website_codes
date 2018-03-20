

<!doctype html>
<html lang="en">
  <head>
    <title>Merge Sort-algoskills</title>
   <meta name="description" content="Merge sort is an efficient and very popular sorting algorithm. It is basically a divide and conquer algorithm just like the quick sort.Click to know it's ideology,pseudo code,code and much more!">
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
            <h1 style="font-family: 'Raleway', sans-serif;color:  #e8491d;">Merge Sort</h1>
            <a href="merge_brief.php" style="font-weight: bold;font-family: 'Raleway', sans-serif;font-size: 25px;"> In hurry ! Click to know in brief ( Quick Review ) </a>
            <h3 style="font-weight: bold;font-family: 'Raleway', sans-serif;color:  #e8491d
   			">What does it mean? </h3>
            <p style="font-size:120%;font-family: 'Raleway', sans-serif;"> Merge sort is an efficient and very popular sorting algorithm. It is basically a divide and conquer algorithm just like the quick sort. So the strategy includes <i> divide, conquer and combine.</i> Lets see!</p>
            
            <h3 style="font-family: 'Raleway', sans-serif;">Concept</h3>
            <p style="font-size: 120%;font-family: 'Raleway', sans-serif;"> 
            First of all, divide and conquer algorithms follow the following strategy:<br>
            <i>Divide: </i> <span style="margin-left:2em">breaking down a problem into two or more sub-problems of the same or related type.</span><br>
            <i>Conquer: </i> <span style="margin-left:1em">using recursion(whenever a function calls itself) to solve these problems.</span><br>
            <i>Combine: </i><span style="margin-left:1em"> merging or combining the results as required.</span><br>
            Following the same strategy here, a merge sort divides the array in two equal parts. Each set is individually sorted and the resulting sorted sequence are merged to produce a single sorted sequence. This process is recursively done. You will get a better picture after the following illustration!
            </p>
            
             
            <h3 style="font-weight: bold;font-family: 'Raleway', sans-serif;color:  #e8491d
        ">Illustration</h3>
        <p style="font-size: 120%;font-family: 'Raleway', sans-serif;">Consider the following array <font style="color: red">a=[5, 7, 3, 10, 6, 2]</font> and assume we have to arrange in ascending order using merge sort.<br>
                </p>
        <div class="row">
          <div> <img class="mainimagesolo20" src="./images/merge1.png" ><br>
            <a href="./images/merge1.png" target="_blank" class="clicktoopen">Click to open image in new tab</a><br></div>
          </div>
          <br>
             <p style="font-size: 120%;font-family: 'Raleway', sans-serif;">
              In the above illustration, we can observe that the array is divided into two parts till we get individual elements. After which, the combination takes place. In the coding part, merge sort is carried out using two important functions i.e. <i>merge</i> and <i>mergesort</i>. The function <i>merge</i> is used to combine the two subarrays in correct order. This function can also be considered as the heart of the algorithm. Another function <i>mergesort</i> is used to divide the array into two parts and calls the function <i>merge</i> within itself.<br><br>
              Before jumping to pseudo code or code, let's first understand the working of functions <i>merge</i> and <i>mergesort</i>. In the last step of above picture,<br>
               merging {3,5,7} and {2,6,10} ---> as {2,3,5,6,7,10} <br>
                or even just merging {10} and {6} ----> as  {6,10} ....is the sole responsibility of <i>merge</i> function. So it gets input as 3 indices namely p,q and r which are indices of subarrays such that 1st subarray is a[ p ... q ] and second is a[ q+1, ... r ]. For simplicity, a[p...q] is copied in L[0,1..n1-1] and a[q+1....r] is copied in R[0,1...n2-1], where n1 and n2 are size of respective subarrays. The following is the  illustration of <span style="color: #e8491d">merge function, which compares the two subarrays from left most side and consequently places the smaller one in the merged array( for ascending order).</span>  </p>
                <h4 style="font-family: 'Raleway', sans-serif;color:#e8491d;">Illustration of merge funcion - I</h4>
                 <div class="row">
          <div> <img class="mainimagesolo20" src="./images/merge2.png" ><br>
            <a href="./images/merge2.png" target="_blank" class="clicktoopen">Click to open image in new tab</a><br></div>
          </div>
           <h4 style="font-family: 'Raleway', sans-serif;color:#e8491d">
        Illustration of merge funcion - II</h4>
                 <div class="row">
          <div> <img class="mainimagesolo20" src="./images/merge3.png" ><br>
            <a href="./images/merge3.png"target="_blank" class="clicktoopen">Click to open image in new tab</a><br></div>
          </div>

            <h4 style="font-family: 'Raleway', sans-serif;color:#e8491d">Pseudo Code</h4>
            <pre class="coding"><code class="c++" style="font-weight: bold;"> 
//a is the given array to be sorted starting from index 0
//first subarray is a[p,p+1,...,q]
//second subarray is a[q+1,...,r]
merge(a,p,q,r) //merges a[p,p+1,...q] and a[q+1,....r] in sorted form
{
  n1= q-p+1 //n1 and n2 are size of first and second subarray resp.
  n2= r-q // r-(q+1)+1, note that +1 is used since array starts from 0
  L[n1] and R[n2] be two arrays
  for(i = 0 to n1-1) //copying into left subarray 
    L[i]= a[p+i]
  for(j = 0 to n2-1) //copying into right subarray 
    R[j]= a[(q+1)+j]
  i=0 //initial value of L subarray
  j=0 //initial value of R aubarray
  k=p //initial value of a array
  while (i < n1 and j < n2 ) 
  {
    //put the smaller among L[i] or R[j] in a[k]
    if(L[i] <= R[j]) then {
      a[k]=L[i]
      i++
    }
    else {
      a[k]=R[j]
      j++
    }
    k++ //to place a new number at next position 
  }
  while (i < n1 ) /*Invoked for copying remaining items, for ex: L=[7,8] and R=[1,2]*/ 
  {
    a[k]=L[i]
    i++
    k++
  }
  while (j < n2 )/*Invoked for copying remaining items, for ex: L=[1,2] and R=[7,8] */ 
  {
    a[k]=R[j]
    j++
    k++
  }
}
//The second function is mergesort which divides the array into two parts and
// calls the merge function to merge them
mergesort(a,p,r)
{
  if(p < r) then {
    q=(p+r)/2 //middle point
    mergesort(a,p,q)
    mergesort(a,q+1,r)
    merge(a,p,q,r)
  }
}
                </code></pre>
       <p style="font-size: 120%;font-family: 'Raleway', sans-serif;">The recursion used in the <i>mergesort</i> function is important. Each <i>mergesort</i> itself invokes two other <i>mergesort</i> and one <i>merge</i> function . It continues till only one element remains or in other words <i>p < q</i>. The following diagram systematically shows how it works!<br>
        <div class="row">
          <div> <img class="mainimagesolo20" src="./images/merge4.png" ><br>
            <a href="./images/merge4.png" target="_blank" class="clicktoopen" >Click to open image in new tab</a><br></div>
          </div>
        <h3 style="font-family: 'Raleway', sans-serif;">Code</h3>
<pre class="coding"><code class="c++" style="font-weight: bold;"> 
#include<<strong>iostream</strong>>
using namespace std;
void merge(int a[], int p,int q,int r); //forward declaration
void mergesort(int a[], int p,int r);
int main()
{
  int n,i,j;
  cout<<"Enter total number of elements/size: ";
  cin>>n;
  int arr[n];// array declaration
  cout<<"Enter numbers: ";
  for(i = 0;i< n; i++)// to input the numbers into an array
    cin>>arr[i];
  mergesort(arr,0,n-1);
  cout<<"Array sorted in increasing order: "<< endl;
  for(i = 0;i< n; i++)
    cout<< arr[i]<<" ";
  return 0;
}


//first subarray is a[p,p+1,...,q]
//second subarray is a[q+1,...,r]
void merge(int a[],int p,int q,int r) //merges a[p,p+1,...q] and a[q+1,....r] in sorted form
{
  int i,j,k,n1,n2;
  n1= q-p+1;
  n2= r-q; //n1 and n2 are size of first and second subarray resp.
  int L[n1],R[n2];
  for(i = 0 ; i< n1; i++) //copying into left subarray 
    L[i]= a[p+i];
  for(j = 0 ; j< n2; j++) //copying into right subarray 
    R[j]= a[(q+1)+j];
  i=0; //initial value of L subarray
  j=0; //initial value of R aubarray
  k=p; //initial value of a array
  while (i < n1 && j < n2 ) 
  {
    //put the smaller among L[i] or R[j] in a[k]
    if(L[i] <= R[j]) {
      a[k]=L[i];
      i++;
    }
    else {
      a[k]=R[j];
      j++;
    }
    k++; //to place a new number at next position 
  }
  while (i < n1 ) /*Invoked for copying remaining items, for ex: L=[7,8] and R=[1,2]*/ 
  {
    a[k]=L[i];
    i++;
    k++;
  }
  while (j < n2 )/*Invoked for copying remaining items, for ex: L=[1,2] and R=[7,8] */ 
  {
    a[k]=R[j];
    j++;
    k++;
  }
}
//The second function is mergesort which divides the array into two parts and
// calls the merge function to merge them
void mergesort(int a[], int p, int r)
{
  int q;
  if(p < r) {
    q=(p+r)/2; //middle point
    mergesort(a,p,q);
    mergesort(a,q+1,r);
    merge(a,p,q,r);
  }
}
 </code></pre>
          <br>
           
          <h4 style="font-family: 'Raleway', sans-serif;color:#e8491d;font-weight: bold;">Time and Space Complexity</h4> 
          <p style="font-size: 120%;font-family: 'Raleway', sans-serif;">
            Let the time taken to sort n elements be T(n), so on dividing in two parts bifurcates time as T(n/2). Merging requires the  time of O(n) as it merges a total of n elements in a list.
<pre class="coding"><code class="c++" style="font-weight: bold;"> 
mergesort>(a,p,r)--------------> T(n)
{
  if(p < r) then {
    q=(p+r)/2
    mergesort(a,p,q)--------------> T(n/2)
    mergesort(a,q+1,r)--------------> T(n/2)
    merge(a,p,q,r)--------------> O(n)
  }
}</code></pre>
             <p style="font-size: 120%;font-family: 'Raleway', sans-serif;">
            So time complexity <span style="font-family: calibri"> T(n)= 2* T(n/2) + Θ (n) </span> . Using Master's theorem's , <span style="color: red">T(n) = Θ(nlogn) </span>. In every case including worst,average and best, the time complexity remains same as the this algorithm divides and merge in all the cases.<br>
            [ Master's theorem's second part is used here i.e.Given <span style="font-family: calibri"> T(n) = aT(n/b) + f(n) </span> if f(n) = Θ(n<sup>c</sup>) where c = Log<sub>b</sub> a then T(n) = Θ(ncLog n) such that  a >= 1 and b > 1; Here  c=1 and b=a=2 so c=Log<sub>b</sub>a = 1 and thus T(n)= Θ(nlogn)  ]<br>
            
            <br>
             • Worst-case performance--> Θ(nlogn) <br>
           • Best-case performance -- > Θ(nlogn) <br>
             • Average performance - - - > Θ(nlogn)<br>
             • Space complexity -->O(n)
          <br><br>
          <span style="color: green">Merge sort is indeed a good and efficient sorting algo and even has a worst case time complexity of Θ(nlogn). It is better than quick sort for large data structures but overall, quick sort wins the battle.</span>
          </p>
          
          <h4 style="font-family: 'Raleway', sans-serif;color:#e8491d;font-weight: bold;">Hope you enjoyed!</h4>
            </div>
         
            <br>
            <p style="font-size: 120%;font-family: 'Raleway', sans-serif;"> 
             References:<br>
             <a  target="_blank" href="https://www.flipkart.com/introduction-algorithms-3rd/p/itmdwxyrafdburzg?gclid=CjwKCAiA1uHSBRBUEiwAkBCtzYR8ippU76IGHtHrIW-H40akWpmpDJRgPbHKnYTlhtcqQEXZXi0rohoC_JoQAvD_BwE&pid=9788120340077&lid=LSTBOK9788120340077IW3FJJ&cmpid=content_book_8965229628_gmc_pla&tgi=sem%2C1%2CG%2C11214002%2Cg%2Csearch%2C%2C170219493259%2C1o1%2C%2C%2Cc%2C%2C%2C%2C%2C%2C%2C&s_kwcid=AL%21739%213%21170219493259%21%21%21g%21299142545466%21&ef_id=WiV3FQAABLCavhMd%3A20180113034702%3As">CLRS book</a><br>
             <a target="_blank" href="https://www.flipkart.com/fundamentals-computer-algorithms-2nd/p/itmeyf6efzzdvfzw?gclid=CjwKCAiAtdDTBRArEiwAPT4y-9yodNfBALo7s16zLKdBl_wlqkIKQSRg-LD6Ycd2CrmkBaQDFZxupRoCNIcQAvD_BwE&pid=9788173716126&lid=LSTBOK978817371612625ID4M&cmpid=content_book_8965229628_gmc_pla&tgi=sem%2C1%2CG%2C11214002%2Cg%2Csearch%2C%2C170219493259%2C1o1%2C%2C%2Cc%2C%2C%2C%2C%2C%2C%2C&s_kwcid=AL%21739%213%21170219493259%21%21%21g%21299142545466%21&ef_id=WKf1hQAAADix8GO4%3A20180202180533%3As"> Fundamental of Computer Algorithms by Horowitz</a><br>
             <a target="_blank" href="https://www.youtube.com/watch?v=sfmaf4QpVTw">Algorithm-merge sort</a>
             <br><a target="blank" href="https://en.wikipedia.org/wiki/Merge_sort">wikipedia</a>         
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
s.src = 'https://algoskills-merge-sort.disqus.com/embed.js';
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
