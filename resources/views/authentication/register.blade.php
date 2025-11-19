@include('components.header')

<form action="{{route('register')}}" method="POST">
    @csrf
    <label>Name</lable>
    <input type="text" name="name" placeholder="Full name">
    <label>Email</lable>
    <input type="emial" name="email" placeholder="Email">
    <label>Password</lable>
    <input type="password" name="password" placeholder="Password">
    <label>Retype password</label>
    <input type="password" name="password_confirmation" placeholder="Retype Password">
    <input type="submit">

</form>
    
@include('components.footer')
    
