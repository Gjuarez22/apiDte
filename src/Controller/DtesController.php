<?php

namespace App\Controller;

use DateTime;
use DateTimeZone;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/dtes")
 */
class DtesController extends AbstractController
{
    /**
     * @Route("/generarJson/facturaFinal", name="app_dtes", methods={"GET"})
     */
    public function generarJson(): Response
    {
        $fecha = new DateTime('now', new DateTimeZone('America/El_Salvador'));
        $fechaFormato = date_format($fecha,"yyyy-mm-dd");
        $horaFormato  = date_format($fecha,"H:i:s");

        $identificacion = [
            "version"=> 1,
            "ambiente" =>"00",
            "tipoDte" => "01",
            "numeroControl" => "DTE-01-0001ONEC-000000000000004",
            "codigoGeneracion" => "{{uuidV4}}",
            "tipoModelo" => 1,
            "tipoOperacion" => 1,
            "tipoContingencia" => null,
            "motivoContin" => null,
            "fecEmi" => $fechaFormato ,
            "horEmi" => $horaFormato,
            "tipoMoneda" => "USD"
        ];

        $emisor = [
            "nit" => "06142803901121",
            "nrc"=> "2398810",
            "nombre" => "JUAN MANUEL REYES",
            "codActividad" => "73100",
            "descActividad" => "Publicidad",
            "nombreComercial"=> null,
            "tipoEstablecimiento" => "01",
            "direccion"=> [
              "departamento"=> "06",
              "municipio"=> "14",
              "complemento"=> "San Salvador"
            ],
            "telefono" =>"2281-8000",
            "codEstableMH" => null,
            "codEstable" => null,
            "codPuntoVentaMH" => null,
            "codPuntoVenta"=> null,
            "correo" => "mentesbrillantesagencia@gmail.com"
        ];

        $arrayPrincipal = [
            "identificacion" => $identificacion,
            "documentoRelacionado" => null,
            "emisor" => $emisor
        ];
        /*
  "receptor": {
    "tipoDocumento": "36",
    "numDocumento": "046365799",
    "nrc": null,
    "nombre": "María Concepción",
    "codActividad": null,
    "descActividad": null,
    "direccion": {
      "departamento": "06",
      "municipio": "14",
      "complemento": "SAN SALVADOR"
    },
    "telefono": "78291734",
    "correo": "gj23726116@gmail.com "
  },

  "otrosDocumentos": null,
  "ventaTercero": null,
  "cuerpoDocumento": [
    {
      "numItem": 1,
      "tipoItem": 2,
      "numeroDocumento": null,
      "cantidad": 1.0,
      "codigo": null,
      "codTributo": null,
      "uniMedida": 99,
      "descripcion": "EMISIÓN DE CERTIFICADOS DE FIRMA ELECTRÓNICA",
      "precioUni": 15.0,
      "montoDescu": 0.0,
      "ventaNoSuj": 0.0,
      "ventaExenta": 0.0,
      "ventaGravada": 15.0,
      "tributos": null,
      "psv": 0.0,
      "noGravado": 0.0,
      "ivaItem": 1.73
    }
  ],
  "resumen": {
    "totalNoSuj": 0.0,
    "totalExenta": 0.0,
    "totalGravada": 15.0,
    "subTotalVentas": 15.0,
    "descuNoSuj": 0.0,
    "descuExenta": 0.0,
    "descuGravada": 0.0,
    "porcentajeDescuento": 0.0,
    "totalDescu": 0.0,
    "tributos": null,
    "subTotal": 15.0,
    "ivaRete1": 0.0,
    "reteRenta": 0.0,
    "montoTotalOperacion": 15.0,
    "totalNoGravado": 0.0,
    "totalPagar": 15.0,
    "totalLetras": "QUINCE 0 /100",
    "totalIva": 1.73,
    "saldoFavor": 0.0,
    "condicionOperacion": 1,
    "pagos": null,
    "numPagoElectronico": null
  },
  "extension": {
    "nombEntrega": null,
    "docuEntrega": null,
    "nombRecibe": null,
    "docuRecibe": null,
    "observaciones": null,
    "placaVehiculo": null
  },
  "apendice": null
}
 */
       return new JsonResponse($arrayPrincipal);
    }
}
