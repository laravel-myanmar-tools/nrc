<?php

it('can check nrc', function () {
    expect(nrc()->isNrc('12/OUKAMA(N)123456'))->toBeTrue();
    expect(nrc()->isNrc('၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆'))->toBeTrue();
    expect(nrc()->isNrc('၁၄၅၆'))->toBeTrue();
});

it('can normalize nrc', function () {
    expect(nrc()->normalizeNrc('12/OUKAMA(N)123456', 'mm'))->toBeNrc();
    expect(nrc()->normalizeNrc('12/OuKaMa(Naing)123456'))->toBeNrc();
    expect(nrc()->normalizeNrc('12/OuKaMa(Naing)123456', 'mm'))->toBeNrc();
    expect(nrc()->normalizeNrc('၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆'))->toBeNrc();
    expect(nrc()->normalizeNrc('၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆', 'mm'))->toBeNrc();
});
