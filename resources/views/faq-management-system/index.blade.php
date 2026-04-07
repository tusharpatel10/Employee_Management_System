@extends('faq-management-system.main_design')
@section('content')
    <div class="container">
        <div class="title-container text-center mb-3">
            <h1>Frequently Asked Questions</h1>
            <div class="buttons">
                <button class="btn btn-dark" data-toggle="modal" data-target="#addFaqModal">Add FAQ</button>
                <button class="btn btn-success" onclick="showAllActionButtons()">Manage FAQ</button>
            </div>
        </div>


        {{-- Alerts --}}
        @if (session('Success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('Success') }}
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
            </div>
        @endif

        {{-- ✅ Error Message (replaces echo "Error:") --}}
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
            </div>
        @endif

        @foreach ($faqs as $faq)
            <div class="wrapper">
                <button class="toggle">
                    <span id="question-{{ $faq->id }}">{{ $faq->question }}</span>
                    <i class="fa-solid fa-plus icon"></i>
                </button>
                <div class="content">
                    <p id="answer-{{ $faq->id }}">{{ $faq->answer }}</p>
                </div>
                <div class="action-button float-right" style="display: none;">
                    <button class="btn btn-primary btn-sm" onclick="updateFaq({{ $faq->id }})"><img
                            src="https://cdn-icons-png.flaticon.com/512/1159/1159633.png" alt=""></button>
                    <button class="btn btn-danger btn-sm" onclick="deleteFaq({{ $faq->id }})"><img
                            src="https://cdn-icons-png.flaticon.com/512/1214/1214428.png" alt=""></button>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Modals -->
    <div class="modal fade" id="addFaqModal" tabindex="-1" aria-labelledby="addFaq" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addFaq">Add FAQ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- ✅ Validation Errors (replaces alert('Please fill in all fields!')) --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('faq/faqStore') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="question">Frequently Asked Question:</label>
                            <input type="text" class="form-control" id="question" name="question">
                            {{-- ✅ Individual field error --}}
                            @error('question')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="answer">Answer:</label>
                            <textarea class="form-control" name="answer" id="answer" cols="30" rows="7"></textarea>
                            {{-- ✅ Individual field error --}}
                            @error('answer')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="updateFaqModal" tabindex="-1" aria-labelledby="updateFaq" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateFaq">Update FAQ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./endpoint/update-faq.php" method="POST">
                        <input type="text" class="form-control" id="updateFaqID" name="tbl_faq_id">
                        <div class="form-group">
                            <label for="updateQuestion">Frequently Asked Question:</label>
                            <input type="text" class="form-control" id="updateQuestion" name="question">
                        </div>
                        <div class="form-group">
                            <label for="updateAnswer">Answer:</label>
                            <textarea class="form-control" name="answer" id="updateAnswer" cols="30" rows="7"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- ✅ Auto open modal if validation fails --}}
    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                $('#addFaqModal').modal('show');
            });
        </script>
    @endif
@endsection
