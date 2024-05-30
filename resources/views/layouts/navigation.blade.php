<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Booking App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('internautes.index') }}">Internautes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('hotels.index') }}">Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reservations.index') }}">Reservations</a>
                </li>
            </ul>
        </div>
    </nav>