<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		/*
				$opts = array(
					'https'=>array(
						'method'=>"GET",
						'header'=>"Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.
				eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6Ijk1NjhmNmM2LTAzNWEtNDk5MS04MmY1LWU4NDZlMjIxOTIxYiIs
				ImlhdCI6MTU4MDk3OTgxNiwic3ViIjoiZGV2ZWxvcGVyL2QxMjdlNTZhLTg3YTAtZDhiMS0xOTI1LWUwNzgxOTFlMDg3YSIsInNjb3BlcyI6WyJyb3lhbGUiXS
				wibGltaXRzIjpbeyJ0aWVyIjoiZGV2ZWxvcGVyL3NpbHZlciIsInR5cGUiOiJ0aHJvdHRsaW5nIn0seyJjaWRycyI6WyI4Ni4yNTAuMjUzLjEwOCIsIjE1OC42OS4x
				MzkuOTIiLCIxODUuNzcuMTgwLjI1MCJdLCJ0eXBlIjoiY2xpZW50In1dfQ.0ckx0A6Tuf0nm8oIk_mXBT4-XqHH5vbaO5V7zMcRPArjHl2bmTInZ6waxzkRL4jD
				pRDZ28y6vJ0doXbbH-udrQ" .
							"Accept: application/json" .
							"dataType: jsonp"
					)
				);

				$webhookurl = "https://discordapp.com/api/webhooks/673488857513066525/NphUOHDReY1Tmj7djoG9iaBwGVYRN3iIl1hmwWRQ2kjYGMqrf65XHRw22CpDcFEwYF1L";
				$context = stream_context_create($opts);

		// Open the file using the HTTP headers set above
				$file = file_get_contents('https://api.clashroyale.com/v1/clans/%23JLYGP9/currentwar', false, $context);

				$array = json_decode($file, true);
				$war = $array["state"];



				$url = 'https://api.clashroyale.com/v1/clans/%23JLYGP9/currentwar';
				$ch = curl_init($url);
				$data = [''];
				// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

				curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwM
					DAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6
					Z2FtZWFwaSIsImp0aSI6Ijk1NjhmNmM2LTAzNWEtNDk5MS04MmY1LWU4NDZlMjIxOTIxYiIsImlhdCI6MTU4
					MDk3OTgxNiwic3ViIjoiZGV2ZWxvcGVyL2QxMjdlNTZhLTg3YTAtZDhiMS0xOTI1LWUwNzgxOTFlMDg3YSIs
					InNjb3BlcyI6WyJyb3lhbGUiXSwibGltaXRzIjpbeyJ0aWVyIjoiZGV2ZWxvcGVyL3NpbHZlciIsInR5cGUi
					OiJ0aHJvdHRsaW5nIn0seyJjaWRycyI6WyI4Ni4yNTAuMjUzLjEwOCIsIjE1OC42OS4xMzkuOTIiLCIxODUu
					NzcuMTgwLjI1MCJdLCJ0eXBlIjoiY2xpZW50In1dfQ.0ckx0A6Tuf0nm8oIk_mXBT4-XqHH5vbaO5V7zMcRP
					ArjHl2bmTInZ6waxzkRL4jDpRDZ28y6vJ0doXbbH-udrQ',
					'Content-Type:application/json',
					'dataType: jsonp'
				));

				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

				$result = curl_exec($ch);
				echo($result);

				curl_close($ch);

		$war = "coucou";
				//echo $war;
		*/

		$url = "https://api.clashroyale.com/v1/clans/%23JLYGP9/currentwar";

		// append the header putting the secret key and hash

		$request_headers = [
			'Authorization:  Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwM
			DAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6
			Z2FtZWFwaSIsImp0aSI6Ijk1NjhmNmM2LTAzNWEtNDk5MS04MmY1LWU4NDZlMjIxOTIxYiIsImlhdCI6MTU4
			MDk3OTgxNiwic3ViIjoiZGV2ZWxvcGVyL2QxMjdlNTZhLTg3YTAtZDhiMS0xOTI1LWUwNzgxOTFlMDg3YSIs
			InNjb3BlcyI6WyJyb3lhbGUiXSwibGltaXRzIjpbeyJ0aWVyIjoiZGV2ZWxvcGVyL3NpbHZlciIsInR5cGUi
			OiJ0aHJvdHRsaW5nIn0seyJjaWRycyI6WyI4Ni4yNTAuMjUzLjEwOCIsIjE1OC42OS4xMzkuOTIiLCIxODUu
			NzcuMTgwLjI1MCJdLCJ0eXBlIjoiY2xpZW50In1dfQ.0ckx0A6Tuf0nm8oIk_mXBT4-XqHH5vbaO5V7zMcRP
			ArjHl2bmTInZ6waxzkRL4jDpRDZ28y6vJ0doXbbH-udrQ',
			'Accept: application/json',
			'dataType: jsonp'
		];

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		$data = curl_exec($ch);

		if (curl_errno($ch)) {
			print "Error: " . curl_error($ch);
		} else {
			// Show me the result

			$transaction = json_decode($data, TRUE);

			curl_close($ch);

			//var_dump($transaction);
			return view('welcome_message', $transaction);


		}

		//--------------------------------------------------------------------

	}
}
