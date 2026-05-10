import {useState} from 'react';

export default function TripCard({ trip }) {
    const [showNotes, setShowNotes] = useState(false);
    
    return (
        <article className="card">
            <h2>{trip.name}</h2>
            <p>{trip.country}</p>
            <button onClick={() => setShowNotes(!showNotes)}>
                {showNotes ? 'Hide notes' : 'Show notes'}
            </button>
            {showNotes && <p className="notes">{trip.notes ?? 'No notes yet.'}</p>}
            <p className="dates">
                {trip.start_date} → {trip.end_date}
            </p>
        </article>
    );
}