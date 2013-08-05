<?php echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<req:BookPickupRequest xmlns:req="http://www.dhl.com" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.dhl.com book-pickup-req.xsd">
    <Request>
        <ServiceHeader>
            <MessageTime>2001-12-17T09:30:47-05:00</MessageTime>
            <MessageReference>1234567890123456789012345678901</MessageReference>
            <SiteID>DServiceVal</SiteID>
            <Password>testServVal</Password>
        </ServiceHeader>
    </Request>
    <Requestor>
        <AccountType>D</AccountType>
        <AccountNumber>845702619</AccountNumber>
        <RequestorContact>
            <PersonName>Rikhil</PersonName>
            <Phone>23162</Phone>
            <PhoneExtention>5053</PhoneExtention>
        </RequestorContact>
    </Requestor>
    <Place>
        <LocationType>B</LocationType>
        <CompanyName>company name</CompanyName>
        <Address1>first line addr</Address1>
        <Address2>norfolk st</Address2>
        <PackageLocation>String</PackageLocation>
        <City>String</City>
        <StateCode>CA</StateCode>
        <DivisionName>California</DivisionName>
        <CountryCode>US</CountryCode>
        <PostalCode>94403</PostalCode>
    </Place>
    <Pickup>
        <PickupDate>2011-10-07</PickupDate>
        <ReadyByTime>10:20</ReadyByTime>
        <CloseTime>14:20</CloseTime>
        <AfterHoursClosingTime>16:20</AfterHoursClosingTime>
        <AfterHoursLocation>String</AfterHoursLocation>
        <Pieces>1</Pieces>
        <weight>
            <Weight>10</Weight>
            <WeightUnit>L</WeightUnit>
        </weight>
    </Pickup>
    <PickupContact>
        <PersonName>Subhayu</PersonName>
        <Phone>4801313131</Phone>
        <PhoneExtention>5768</PhoneExtention>
    </PickupContact>
    <ShipmentDetails>
        <AccountType>D</AccountType>
        <AccountNumber>845702619</AccountNumber>      
        <BillToAccountNumber>845702619</BillToAccountNumber>
        <AWBNumber>7520067111</AWBNumber>
        <NumberOfPieces>1</NumberOfPieces>
        <Weight>10</Weight>
        <WeightUnit>L</WeightUnit>
        <GlobalProductCode>P</GlobalProductCode>
        <DoorTo>DD</DoorTo>
        <DimensionUnit>I</DimensionUnit>
        <InsuredAmount>999999.99</InsuredAmount>
        <InsuredCurrencyCode>USD</InsuredCurrencyCode>
        <Pieces>
            <Weight>10</Weight>
            <Width>2</Width>
            <Height>2</Height>
            <Depth>2</Depth>
        </Pieces>
        <SpecialService>S</SpecialService>
        <SpecialService>I</SpecialService>
    </ShipmentDetails> 
</req:BookPickupRequest>