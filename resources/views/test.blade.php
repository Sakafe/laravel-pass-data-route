@php
    $user = "Google Baba";
    $fruits = ['Mango','Banana','Litchi','jackfruits','Dragon fruit']
@endphp

<script>
    // var data = @json($fruits);
    // Blade templets
    var data = {{Js:: from($fruits)}};
    // console.log(data);
    data.forEach(fruit => {
        console.log(fruit );
    });
</script>
