@extends('app')

@section('content')
    
<header>
    <h2> <a href="/">Road Transport Service Application</a>  </h2>
</header>
<main style="color: black; margin-top: 20px;">
  <?php 
    $d=date("Y-m-d", strtotime("+1 week"));
  $dayofweek = date('w', strtotime($d));
  if($dayofweek == 'Sunday')
  $d = date("Y-m-d", strtotime("+1 day"));?>

  <div class="normal " style="margin-left: 200px">
    I state that I am 18 years old (more than 18 or equle to 18). 
    <p>
    I hold an Indian nationality.
    <p>
    I am physically fit to ride/drive a vehicle.
    <p>
    I hereby declare that, to the best of my knowledge and belief, 
    <p>
    the particulars given above and the declaration made therein are true. 
    <br>
    <label for="location">location:-</label>
    <input type="text"  name="location"><br>
    <p>
    <?php echo "Today is " . date("Y/m/d") . "<br>";?>
    
    
    <form ... onsubmit="return checkForm(this);">
    
    <p><input type="checkbox" required name="terms"> I accept the <u>Terms and Conditions</u></p>
    <p><input id="submit" type="submit"></p>
    </form>
    <div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_GhLnKjKE7L1S8C/view" data-text="Pay Now" data-color="#528FF0" data-size="large">
      <script>
      (function(){
      var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
      if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
      s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['__rzp__'];
      rzp && rzp.init && rzp.init()}})();
      </script>
    </div>
    
    </div>

    <table border ="1" cellpadding="10" cellspacing="5" align="center">
      <tr>
        <td align = "center" colspan="2" ><b>EXAM DETAILS</b></td>
      </tr>   
      <tr>
        <td>Exam Date</td>
        <td><?php echo $d ?></td>
      </tr>
    </table>
</main>  

<script>


function checkForm(form)
{
  ...
  if(!form.terms.checked) {
    alert("Please indicate that you accept the Terms and Conditions");
    form.terms.focus();
    return false;
  }
  return true;
}

</script>

@endsection
        









  