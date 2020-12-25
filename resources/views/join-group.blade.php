@extends('layouts.main')

@section('content')
    <div class="congratulation">
        <div class="container">

            <join-group />

        </div>
    </div>
@endsection
<script>
    import JoinGroup from "../js/components/JoinGroup"

    export default {
        components: { JoinGroup }
    }
</script>
