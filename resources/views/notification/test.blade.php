<form action='{{route('notification.send')}}' method='post'>
    @csrf
        <button type='submit'>Kirim</button>
</form>
