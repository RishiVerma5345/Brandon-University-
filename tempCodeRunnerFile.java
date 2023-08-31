 public class abc{
    static int partion(int arr[],int low,int high){
        int pivote=arr[low];
        int i=low-1;
        for(int j=low;j<high;j++){
            if(arr[j]<=arr[pivote])
                i++;
            int temp=arr[i];
            arr[i]=arr[j];
            arr[j]=temp;
        }
        int temp=arr[low];
        arr[low]=arr[i+1];
        arr[i+1]=temp;
        return i+1;
    }
    static void quicksort(int arr[],int low,int high){
        int pi=partion(arr,low,high);
        quicksort(arr,low,pi-1);
        quicksort(arr,pi+1,high);
    }
    public static void main(String[] args) {
        int arr[]={10,40,100,2,3,4,5,11};
        quicksort(arr,0,8);
        System.out.print(arr);
    }
}
