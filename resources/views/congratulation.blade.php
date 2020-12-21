@extends('layouts.main')

@section('content')
    <div class="congratulation">
        <div class="container">
            <h1>Поздравить близкого вам человека проще чем вы думаете</h1>
            <div class="congratulation__container">
                <div class="congratulation__left">
                    <congratulation-forms-component></congratulation-forms-component>
                </div>
                <div class="congratulation__right">
                    какие нибудь слайды
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
  import CongratulationFormsComponent from "../js/components/CongratulationFormsComponent";
  export default {
    components: {CongratulationFormsComponent}
  }
</script>
