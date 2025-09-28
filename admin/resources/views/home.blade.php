<!-- resources/views/logs.blade.php -->
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Log Übersicht</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f6f6f6;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            font-size: 14px;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        h1 {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <h1>Log Einträge</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Visitor Headers</th>
                <th>IP Adresse</th>
                <th>Pfad</th>
                <th>TLS Version</th>
                <th>User Agent</th>
                <th>Sprache</th>
                <th>Referrer</th>
                <th>Browser Fingerprint</th>
                <th>Erstellt am</th>
                <th>Aktualisiert am</th>
            </tr>
        </thead>
        <tbody>
            @foreach($visitorlogs as $entry)
                <tr>
                    <td>{{ $entry->id }}</td>
                    <td>{{ $entry->visitor_headers }}</td>
                    <td>{{ $entry->ip_address }}</td>
                    <td>{{ $entry->path }}</td>
                    <td>{{ $entry->tlsVersion }}</td>
                    <td>{{ $entry->user_agent }}</td>
                    <td>{{ $entry->language }}</td>
                    <td>{{ $entry->referrer }}</td>
                    <td>{{ $entry->browser_fingerprint }}</td>
                    <td>{{ $entry->created_at }}</td>
                    <td>{{ $entry->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>