@extends('inc.header')
<div class="container p-5">
    <form action="" method="post" id="makepayment">
        @csrf
        <div class="info"></div>
        <div class="form-group my-3">
            <label for="subaccount">Select SubAccount</label>
            <select name="subaccount" id="" class="form-control">
                <option value="">Select SubAccount</option>
                @foreach ($users as $subaccount)
                    <option value="{{ $subaccount->subaccount_code }}">{{ $subaccount->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group my-3">
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="" class="form-control">
        </div>
        <button class="btn btn-primary my-3">
            Make Payment
        </button>
    </form>
</div>
@extends('inc.footer')
@section('js')
    <script>
        let verifyPayment = (reference) => {
            $.ajax({
                url: '{{ URL::to('verifyPayment') }}',
                method: 'post',
                data: {
                    _token: '{{ csrf_token() }}',
                    reference: reference
                },
                success: (response) => {
                    if (response.status) {
                        $('.info').html(`
                            <div class="alert alert-success">
                                ${response.message}
                            </div>
                        `);
                    } else {
                        $('.info').html(`
                            <div class="alert alert-danger">
                                ${response.message} ${response.statusText}
                            </div>
                        `);
                    }
                }
            });
        }

        $(document).ready(function() {
            $('#makepayment').submit(function(e) {
                e.preventDefault();
                var form = $(this);
                var url = "{{ URL::current() }}";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(),
                    success: function(data) {
                        console.log(data);
                        //check if status is true
                        if (data.status) {
                            //open a new tab
                            window.open(data.url, '_blank');
                            var reference = data.reference;
                            //show a message to the user
                            $('.info').html(`
                                <div class="alert alert-info">
                                    Please wait while we redirect you to the payment page
                                </div>
                            `);
                            //check for payment verification
                            setInterval(() => {
                                verifyPayment(reference);
                            }, 3000);
                        } else {
                            //display error message
                            alert(data.message);
                        }
                    }
                });
            });
        });
    </script>
@endsection
