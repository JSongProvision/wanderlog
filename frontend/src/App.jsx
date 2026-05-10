import TripCard from './components/TripCard';

const TRIPS = [
  { id: 1, 
    name: 'Germany 2026', 
    country: 'Germany', 
    start_date: '2026-09-15',
    end_date: '2026-09-23'
  },
  {
    id: 2, 
    name: 'PNW Road Trip', 
    country: 'USA', 
    start_date: '2027-06-01',
    end_date: '2027-06-10'
  },
];

export default function App() {
  return (
    <main>
      <h1>Wanderlog</h1>
      <div className="trips">
        {TRIPS.map((trip) => (
          <TripCard key={trip.id} trip={trip}/>
        ))}
      </div>
    </main>
  );
}