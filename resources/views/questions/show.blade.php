@extends ('questions/layout')

@section('content')


<section id="banner" class="banner-sm">
        <div class="container">
            <h1>Questions</h1>
        </div>
    </section>
    
    foreach($questions as $question)
    <section id="question">
        <div class="container">
            <div class="question-left">
                <div class="user-avatar">
                    <img class="img-fluid"
                         src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
                </div>
                <div class="user-name">John Doe</div>
                <div class="user-stats">
                    <div class="user-stat">
                        <span>3</span>
                        <label>responses</label>
                    </div>
                    <div class="user-stat">
                        <span>5</span>
                        <label>votes</label>
                    </div>
                </div>
    
            </div>
            <div class="question-right">
                <h2>How can I connect to MySQL in Python 3 on Windows?</h2>
                <p>I am using ActiveState Python 3 on Windows and wanted to connect to my MySQL database. I heard that
                    mysqldb was
                    the module to use. I can't find mysqldb for Python 3.</p>
                <p>Is there a repository available where the binaries exist for mysqldb? How can I connect to MySQL in
                    Python 3 on
                    Windows?</p>
            </div>
        </div>
    </section>
    
    <section id="answers">
    
        <div class="container">
            <h2>12 Answers</h2>
            <div class="answer">
                <div class="answer-left">
                    <div class="user-avatar">
                        <img class="img-fluid"
                             src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
                    </div>
                    <div class="user-name">John Doe</div>
                    <div class="user-stats">
                        <div class="user-stat">
                            <span>3</span>
                            <label>responses</label>
                        </div>
                        <div class="user-stat">
                            <span>5</span>
                            <label>votes</label>
                        </div>
                    </div>
                </div>
                <div class="answer-right">
                    <p>{{ $answer->text }}</p>
                    <br>
                    And just to be sure, the question was: {{ $answer->question->title }}
                </div>
            </div>
        @endforeach

        </div>
    
    </section>

    
@endsection