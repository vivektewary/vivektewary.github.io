function [x] = bisect(f,a,b,tol);
a0=a;b0=b;len=b0-a0;
if f(a)*f(b)>0
    display('Choose an appropriate interval');
    return;
else
    while(len>2*tol)
        m=(a0+b0)/2;y1=f(a0)*f(m);y2=f(b0)*f(m);
        if y1<0
            b0=m;
        elseif y2<0
            a0=m;
        else
            x=m;
            break;
        end
    len=b0-a0;
    end
    x=m;
end