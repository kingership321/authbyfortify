<h1>Home</h1>
@auth
<a href="" class=" pt-2 d-inline-block text-danger">
          <form action="{{route('logout')}}" method="post">
            @csrf

              <button type="submit"><i class="fas fa-sign-out-alt mr-2"></i>Logout</button>
        </form>
        </a>
@endauth