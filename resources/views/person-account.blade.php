@extends('layouts.main')

@section('content')
    <div class="congratulation">
        <div class="container">

            <h1>Person</h1>
            <personal-account />
        </div>
    </div>
@endsection
<script>
    import PersonalAccount from "../js/components/PersonalAccount"

    export default {
        components: { PersonalAccount }
    }
</script>
